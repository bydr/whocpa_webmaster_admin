import { getCurrentTarget, setGlobalImplementation } from "../helpers/utils"
const bodyScrollLock = require("body-scroll-lock")

const MODULE_NAME = "modal"
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
  window.whocpa[MODULE_NAME].opened = openedModals

  if (openedModals.length === 0) {
    enableBodyScroll(modalElement)
    clearAllBodyScrollLocks()
  }
}
export const showModal = (modalElement) => {
  console.log("showModal ", modalElement)
  modalElement.classList.add(IS_ACTIVE_CLASS)

  openedModals = [...openedModals, modalElement.id]
  window.whocpa[MODULE_NAME].opened = openedModals

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
  hideModal(modal)
}
const modalShowHandler = (e) => {
  let currentTarget = getCurrentTarget(
    e,
    e.target.dataset.modal,
    "[data-modal]",
  )
  if (!currentTarget) {
    return
  }
  showModal(document.querySelector(currentTarget.dataset.modal))
}

const modalHideBackdropHandler = (e) => {
  if (e.target.classList.contains("modal-wrapper")) {
    hideModal(e.target.closest(`[data-component="modal"]`))
  }
}

const handleClick = (e) => {
  modalHideBackdropHandler(e)
  modalHideHandler(e)
  modalShowHandler(e)
}

document.addEventListener("click", handleClick, false)

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    show: showModal,
    hide: hideModal,
    opened: openedModals,
  },
})
