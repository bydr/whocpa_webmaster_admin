import { getCurrentTarget, setGlobalImplementation } from "../helpers/utils"
import { scrollToSmooth } from "./utils"

const MODULE_NAME = "alert"

const IS_ACTIVE_CLASS = "is-active"

const COMPONENT_SELECTOR = `[data-component="alert"]`

export const hideAlert = (alertElement) => {
  alertElement.classList.remove(IS_ACTIVE_CLASS)
}
export const showAlert = (alertElement, isScroll = true) => {
  alertElement.classList.add(IS_ACTIVE_CLASS)

  console.log("isScroll ", isScroll)
  console.log("alertElement.offsetTop ", alertElement.getBoundingClientRect())
  console.log("window.scrollY ", window.scrollY)
  const y = alertElement.getBoundingClientRect().top + window.scrollY
  console.log("y ", y)
  if (isScroll) {
    scrollToSmooth(y, 100, document.body)
  }
}

const alertHideHandler = (e) => {
  let currentTarget = getCurrentTarget(
    e,
    e.target.dataset.alertHide,
    "[data-alert-hide]",
  )
  if (!currentTarget) {
    return
  }

  let alert
  if (currentTarget.dataset.alertHide.length) {
    alert = document.querySelector(currentTarget.dataset.alertHide)
  } else {
    alert = currentTarget.closest(COMPONENT_SELECTOR)
  }
  hideAlert(alert)
}
const alertShowHandler = (e) => {
  console.log("alertShowHandler ")
  let currentTarget = getCurrentTarget(
    e,
    e.target.dataset.alert,
    "[data-alert]",
  )
  if (!currentTarget) {
    return
  }

  console.log("currentTarget.dataset?.alertScroll ", currentTarget.dataset?.alertScroll)

  showAlert(document.querySelector(currentTarget.dataset.alert), currentTarget.dataset?.alertScroll !== "false")
}


const handleClick = (e) => {
  alertHideHandler(e)
  alertShowHandler(e)
}

document.addEventListener("click", handleClick, false)

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    show: showAlert,
    hide: hideAlert,
  },
})
