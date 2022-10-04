"use strict"

import "./modules/dropdown"
import "./modules/copyToClipboard"
import "./modules/modal"
import "./modules/chart"
import "./modules/note"
import "./modules/tooltip"
import "./modules/select"
import "./modules/datepicker"
import "./modules/toggleButton"
import "./modules/messenger/tabs"
import "./modules/formsSteps"

document.addEventListener("DOMContentLoaded", () => {
  menuToggleInit()

  const textareas = [...document.querySelectorAll(".textarea-element")]

  for (const item of textareas) {
    item.addEventListener("input", (e) => {
      e.currentTarget.style.height = `${e.currentTarget.scrollHeight}px`
      e.currentTarget.classList.add("auto")
    })
  }
})

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
