export const initToggler = (elem, option) => {
  const elementList = [
    ...document.querySelectorAll(elem + " .toggler-container"),
  ]

  for (const el of elementList) {
    if (el.classList.contains("is-active")) {
      console.log("el ", el)
      el.querySelector(".toggler-content").style.maxHeight = "initial"
    }
  }

  document.addEventListener("click", function (e) {
    if (
      !e.target.matches(elem + " .toggler-control") &&
      !e.target.closest(".toggler-control")
    ) {
      return
    }

    const parent = e.target.closest(".toggler-container")
    const content = parent.querySelector(".toggler-content")
    if (!parent.classList.contains("is-active")) {
      if (option) {
        for (const el of elementList) {
          el.classList.remove("is-active")
        }
      }
      parent.classList.add("is-active")
      setTimeout(() => {
        const contentInner = content.querySelector(".toggler-content__inner")
        content.style.maxHeight = contentInner.scrollHeight + "px"
      }, 0)
    } else {
      parent.classList.remove("is-active")
      content.style.maxHeight = null
    }
  })
}
