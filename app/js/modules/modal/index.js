import { getCurrentTarget } from "../helpers/utils"
const bodyScrollLock = require("body-scroll-lock")

let openedModals = []
const disableBodyScroll = bodyScrollLock.disableBodyScroll
const enableBodyScroll = bodyScrollLock.enableBodyScroll
const clearAllBodyScrollLocks = bodyScrollLock.clearAllBodyScrollLocks

const IS_ACTIVE_CLASS = "is-active"

const COMPONENT_SELECTOR = `[data-component="modal"]`

export const hideModal = (modalElement) => {
  console.log("hideModal ", modalElement)
  modalElement.classList.remove(IS_ACTIVE_CLASS)
  openedModals = openedModals.filter((m) => m !== modalElement.id)
  console.log("openedModals ", openedModals)
  if (openedModals.length === 0) {
    enableBodyScroll(modalElement)
    clearAllBodyScrollLocks()
  }
}
export const showModal = (modalElement) => {
  console.log("showModal ", modalElement)
  modalElement.classList.add(IS_ACTIVE_CLASS)
  openedModals = [...openedModals, modalElement.id]
  disableBodyScroll(modalElement)
}

const modalHideHandler = (e) => {
  let currentTarget = getCurrentTarget(
    e,
    e.target.dataset.modalHide,
    "[data-modal-hide]",
  )
  if (!currentTarget) {
    return
  }

  let modal
  if (currentTarget.dataset.modalHide.length) {
    modal = document.querySelector(currentTarget.dataset.modalHide)
  } else {
    modal = currentTarget.closest(COMPONENT_SELECTOR)
  }
  console.log("hide handler ", modal)
  hideModal(modal)
}
const modalShowHandler = (e) => {
  let currentTarget = getCurrentTarget(
    e,
    e.target.dataset.modalShow,
    "[data-modal]",
  )
  if (!currentTarget) {
    return
  }
  console.log(
    "showModal handle ",
    document.querySelector(currentTarget.dataset.modalShow),
  )
  showModal(document.querySelector(currentTarget.dataset.modalShow))
}

const handleClick = (e) => {
  console.log("handleClick")
  modalHideHandler(e)
  modalShowHandler(e)
}

document.addEventListener("click", handleClick, false)
