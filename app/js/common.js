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

document.addEventListener("DOMContentLoaded", () => {
  menuToggleInit()

  if (window !== undefined && window.innerWidth < 577) {
    const messengerTabs = [...document.querySelectorAll(".messenger-tabs .tab")]
    for (const tab of messengerTabs) {
      tab.addEventListener("click", () => {
        const currentIsActive = tab.classList.contains("is-active")

        messengerTabs
          .filter((t) => t.classList.contains("is-active"))
          .map((t) => {
            t.classList.remove("is-active")
            const contentTab = document.querySelector(
              `[data-tab-content="${t.id}"]`,
            )
            if (!!contentTab) {
              contentTab.classList.remove("is-active")
            }
          })

        if (currentIsActive) {
          return
        }

        tab.classList.add("is-active")

        const contentTab = document.querySelector(
          `[data-tab-content="${tab.id}"]`,
        )
        if (!!contentTab) {
          contentTab.classList.add("is-active")
        }
      })
    }
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
