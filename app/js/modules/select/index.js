import Choices from "choices.js"

const selectInit = () => {
  const elements = [...document.querySelectorAll(".custom-select")]
  for (const element of elements) {
    console.log("element.dataset.searchEnabled ", element.dataset.searchenabled)

    const themeName = element.dataset.theme
    const themeSelector = !!themeName ? `${themeName}-theme` : ""

    new Choices(element, {
      searchEnabled: !!element.dataset.searchenabled,
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
    })
  }
}

document.addEventListener("DOMContentLoaded", () => {
  selectInit()
})
