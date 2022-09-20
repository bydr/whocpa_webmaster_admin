import { setGlobalImplementation } from "../helpers/utils"

const MODULE_NAME = "toggleButton"

const toggleHandle = (target, { cbDisable, cbActive } = {}) => {
  const button = target

  if (!button) {
    return
  }

  if (button.dataset.toggleText) {
    const toggleText = button.dataset.toggleText
    button.dataset.toggleText = button.innerText
    button.innerText = toggleText
  }

  if (button.classList.contains("is-toggled")) {
    button.classList.remove("is-toggled")

    if (!!cbDisable) {
      cbDisable()
    }
  } else {
    button.classList.add("is-toggled")

    if (!!cbActive) {
      cbActive()
    }
  }
}

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    toggle: toggleHandle,
  },
})
