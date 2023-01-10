import Choices from "choices.js"
import { setGlobalImplementation } from "../helpers/utils"
import { throttle } from "../throttle"

const MODULE_NAME = "select"
const MACROS_ALIAS = "#macros#"
const THROTTLE_DEFAULT = 500

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

const selectInit = () => {
  const elements = [...document.querySelectorAll(".custom-select")]
  for (const element of elements) {
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
        console.log("select is init ", this)
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
  }
}

document.addEventListener("DOMContentLoaded", () => {
  selectInit()
})

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    globalInit: selectInit,
  },
})
