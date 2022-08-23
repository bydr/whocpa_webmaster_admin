import { hideModal } from "./modules/modal"

document.addEventListener("DOMContentLoaded", () => {
  const btnResetPassword = document.querySelector(".js-reset-password")
  if (!!btnResetPassword) {
    btnResetPassword.addEventListener("click", () => {
      const modal = btnResetPassword.closest(`[data-component="modal"]`)
      if (!!modal) {
        console.log("resetPasss ", modal)
        hideModal(modal)
      }
    })
  }
})
