let opened = null
const ACTIVE_SELECTOR = "is-active"

const disableVisibility = (dropdown) => {
  dropdown.classList.remove(ACTIVE_SELECTOR)
  opened = null
}
const enableVisibility = (dropdown) => {
  dropdown.classList.add(ACTIVE_SELECTOR)
  opened = dropdown
}

const handleClick = (e) => {
  const target = e.target.closest(`[data-component="dropdown"] [data-target]`)

  if (!target) {
    if (opened) {
      if (e.target.closest('[data-component="dropdown"]') !== opened) {
        disableVisibility(opened)
      }
    }
  } else {
    const dropdown = target.closest(`[data-component="dropdown"]`)
    console.log("dropdown ", dropdown)

    if (opened === dropdown) {
      disableVisibility(dropdown)
    } else {
      if (opened !== null) {
        disableVisibility(opened)
      }
      enableVisibility(dropdown)
    }
  }
}

document.addEventListener("click", handleClick, false)
