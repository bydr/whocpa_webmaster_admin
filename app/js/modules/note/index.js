const containers = [...document.querySelectorAll(".note-container")]
const ACTIVE_CLASS = "is-open"

for (const container of containers) {
  const btnShow = container.querySelector(".js-note-show")

  if (!btnShow) {
    continue
  }

  btnShow.addEventListener("click", () => {
    console.log("open")
    container.classList.add(ACTIVE_CLASS)
  })

  const popup = container.querySelector(".note-popup")
  const btnHide = popup?.querySelector(".js-note-hide")

  if (!!btnHide) {
    btnHide.addEventListener("click", () => {
      container.classList.remove(ACTIVE_CLASS)
    })
  }
}
