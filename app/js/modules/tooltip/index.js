import tippy from "../../../libs/tippy.js"

const tooltips = [...document.querySelectorAll("[data-tippy-content]")]

tippy(tooltips, {
  animation: "shift-away-subtle",
  theme: "purple",
  // trigger: "click",
})
