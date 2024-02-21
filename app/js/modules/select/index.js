import Choices from "choices.js"
import { setGlobalImplementation } from "../helpers/utils"
import { throttle } from "../throttle"

const MODULE_NAME = "select"
const MACROS_ALIAS = "#macros#"
const THROTTLE_DEFAULT = 500

const MOCK_ITEMS = [
  { value: 'One', label: 'Label One', disabled: true },
  { value: 'Two', label: 'Label Two', selected: false },
  { value: 'Three', label: 'Label Three' },
]

const initializedStack = {}
const searchAjaxHandle =
  (event) =>
  async ({
    endpointParams,
    endpointType,
    endpointUrl,
    instanceSelect,
    endpointFields,
  }) => {
    const input = (event.detail.value || "").toString()

    const makedParams =
      endpointParams !== undefined
        ? endpointParams.replaceAll(MACROS_ALIAS, input)
        : ""

    const params = makedParams.length > 0 ? `?${makedParams}` : ""

    const data = await fetch(`${endpointUrl}${params}`, {
      method: endpointType,
    }).then((res) => res.json())

    instanceSelect.setChoices(
      (data || []).map((item) => ({
        value: item[endpointFields[0] || "value"],
        label: item[endpointFields[1] || "label"],
      })),
      "value",
      "label",
      true,
    )
  }

const removeAttributeSearch = (element) => {
  const wrapper = element.closest(".choices")
  if (!wrapper) {
    return
  }

  const searchInput = wrapper.querySelector(`input[name="search_terms"]`)
  if (!searchInput) {
    return
  }

  searchInput.removeAttribute("name")
}

const init = (element) => {
  // console.log("[init] ", element)
  const themeName = element.dataset.theme
  const themeSelector = !!themeName ? `${themeName}-theme` : ""
  const selectType = element.dataset.selectType // ajax || undefined
  const endpointUrl = element.dataset.endpointUrl // string || undefined
  const endpointType = "GET" // GET || POST || undefined
  const endpointParams = element.dataset.endpointParams
  const endpointFields = (element.dataset.endpointFields || "").split(",")
  const throttleVal = element.dataset.throttle || THROTTLE_DEFAULT

  const instanceSelect = new Choices(element, {
    searchEnabled: element.dataset.search !== undefined,
    items: [],
    choices: [],
    itemSelectText: "",
    placeholder: true,
    removeItemButton: true,
    addItems: true,
    noResultsText: "Результатов не найдено",
    noChoicesText: "Список выбора пуст",
    classNames: {
      containerOuter: `choices ${themeSelector}`,
      containerInner: "choices__inner",
      input: "choices__input",
      inputCloned: "choices__input--cloned",
      list: "choices__list",
      listItems: "choices__list--multiple",
      listSingle: "choices__list--single",
      listDropdown: "choices__list--dropdown",
      item: "choices__item",
      itemSelectable: "choices__item--selectable",
      itemDisabled: "choices__item--disabled",
      itemChoice: "choices__item--choice",
      placeholder: "choices__placeholder",
      group: "choices__group",
      groupHeading: "choices__heading",
      button: "choices__button",
      activeState: "is-active",
      focusState: "is-focused",
      openState: "is-open",
      disabledState: "is-disabled",
      highlightedState: "is-highlighted",
      selectedState: "is-selected",
      flippedState: "is-flipped",
      loadingState: "is-loading",
      noResults: "has-no-results",
      noChoices: "has-no-choices",
    },
    callbackOnInit: () => {
      removeAttributeSearch(element)
    },
  })

  if (selectType === "ajax") {
    if (!!endpointUrl) {
      const searchHandle = throttle((e) => {
        searchAjaxHandle(e)({
          instanceSelect,
          endpointUrl,
          endpointParams,
          endpointType,
          endpointFields,
        })
      }, throttleVal)

      instanceSelect.passedElement.element.addEventListener(
        "search",
        searchHandle,
        false,
      )
    }
  }

  return instanceSelect
}
const initGlobal = () => {
  const elements = [...document.querySelectorAll(".custom-select")]
  for (const element of elements) {
    const initializedEl = init(element)
    const id = element.id || initializedEl._baseId
    if (!!id) {
      initializedStack[id] = [...(initializedStack[id] || []), initializedEl]
    }
  }
}

/*
* id - строка, ключ объекта initialized
* items - массив объектов вида
* { value: 'Two', label: 'Label Two', selected: false, disabled: false }
* value, label - обязательные
* isReplaceChoices - true / false - перезаписывать текущий список значений
* */
const setValuesById = ({id = "", items = [], isReplaceChoices = false}) => {
  const itemsChoice = initializedStack[id]
    if (!itemsChoice) {
      return false
    }

    // может быть несколько селектов с одним id
  for (const item of itemsChoice) {
    item.setChoices(
      items,
      'value',
      'label',
      isReplaceChoices,
    )
  }


}

const initByElement = (id) => {
  if (!id) {
    return
  }

  if (typeof id !== "string") {
    init(id)
    return
  }

  if (id.includes(".") || id.includes("#")) {
    const domEl = [...document.querySelectorAll(id)]
    if (!!domEl && !!domEl.length) {
      for (const el of domEl) {
        init(el)
      }
    }
    return
  }

  let founded
  founded = initializedStack[id]
  if (!!founded) {
    for (const el of founded) {
      new Choices(el.passedElement.element).init()
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  initGlobal()
})

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    globalInit: initGlobal,
    elementInit: (id) => initByElement(id),
    initialized: initializedStack,
    setValuesById: setValuesById,
    _MOCK_ITEMS: MOCK_ITEMS
  },
})
