"use strict"

import "./modules/dropdown"
import "./modules/copyToClipboard"
import "./modules/modal"
import "./modules/chart"

import Choices from "choices.js"

document.addEventListener("DOMContentLoaded", () => {
  selectInit()
  menuToggleInit()
})

const selectInit = () => {
  const elements = [...document.querySelectorAll(".custom-select")]
  for (const element of elements) {
    console.log("element.dataset.searchEnabled ", element.dataset.searchenabled)
    new Choices(element, {
      searchEnabled: !!element.dataset.searchenabled,
      itemSelectText: "",
      placeholder: true,
      classNames: {
        containerOuter: "choices",
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

const menuToggleInit = () => {
  const MODE_CLOSE = "close"
  const MODE_OPEN = "open"
  let mode = MODE_CLOSE
  const menuBtns = [...document.querySelectorAll(".button_menu")]
  const sidebar = document.querySelector(".sidebar-site")
  const sidebarBar = document.querySelector(".sidebar-bar")

  for (const button of menuBtns) {
    button.addEventListener("click", () => {
      if (mode === MODE_CLOSE) {
        button.classList.add("is-active")
        if (!!sidebar) {
          sidebar.classList.add("is-active")
        }
        if (!!sidebarBar) {
          sidebarBar.classList.add("is-active")
        }
        mode = MODE_OPEN
      } else {
        button.classList.remove("is-active")
        if (!!sidebar) {
          sidebar.classList.remove("is-active")
        }
        if (!!sidebarBar) {
          sidebarBar.classList.remove("is-active")
        }
        mode = MODE_CLOSE
      }
    })
  }
}
