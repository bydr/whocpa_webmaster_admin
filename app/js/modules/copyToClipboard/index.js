const setIsCopied = (el, state) => {
  if (!!state) {
    el.classList.add("is-copied")
  } else {
    el.classList.remove("is-copied")
  }
}

async function _copyTextToClipboard(text) {
  if ("clipboard" in navigator) {
    return await navigator.clipboard.writeText(text)
  } else {
    return document.execCommand("copy", true, text)
  }
}

const createTooltipPopup = (target, text = undefined) => {
  const txt = document.createTextNode(text || "Успешно скопировано!")
  const tooltipPopupInner = document.createElement("div")
  tooltipPopupInner.classList.add("tooltip-popup__inner")
  tooltipPopupInner.appendChild(txt)
  const tooltipPopup = document.createElement("div")
  tooltipPopup.classList.add("tooltip-popup")
  tooltipPopup.appendChild(tooltipPopupInner)
  target.appendChild(tooltipPopup)
}

const removeTooltipPopup = (target) => {
  const popups = [...target.querySelectorAll(".tooltip-popup")]
  for(const popup of popups) {
    target.removeChild(popup)
  }
}

const handleCopyClick = (target, copyText) => {
  _copyTextToClipboard(copyText)
    .then(() => {
      removeTooltipPopup(target)
      createTooltipPopup(target)

      setTimeout(() => {
        setIsCopied(target, true)
      }, 100)

      setTimeout(() => {
        setIsCopied(target, false)

        setTimeout(() => {
          removeTooltipPopup(target)
        }, 200)

      }, 1500)
    })
    .catch((err) => {
      console.log(err)
    })
}

const components = [...document.querySelectorAll(`[data-component="copy"]`)]
for (const component of components) {
  component.addEventListener(
    "click",
    () => {
      handleCopyClick(component, component.getAttribute("data-content") || "")
    },
    false,
  )
}
