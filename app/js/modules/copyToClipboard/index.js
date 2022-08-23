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

const handleCopyClick = (target, copyText) => {
  _copyTextToClipboard(copyText)
    .then(() => {
      setIsCopied(target, true)
      setTimeout(() => {
        setIsCopied(target, false)
      }, 1500)
    })
    .catch((err) => {
      console.log(err)
    })
}

const components = [...document.querySelectorAll(`[data-component="copy"]`)]
for (const component of components) {
  const target = component.querySelector("[data-target]")
  if (!target) {
    continue
  }
  target.addEventListener(
    "click",
    () => {
      handleCopyClick(component, component.getAttribute("data-content") || "")
    },
    false,
  )
}
