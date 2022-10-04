const tabsHandler = () => {
  if (window === undefined || window.innerWidth >= 768) {
    return
  }

  const clickHandle = (tab) => () => {
    const currentIsActive = tab.classList.contains("is-active")

    messengerTabs
      .filter((t) => t.classList.contains("is-active"))
      .map((t) => {
        t.classList.remove("is-active")
        const contentTab = document.querySelector(
          `[data-tab-content="${t.id}"]`,
        )
        if (!!contentTab) {
          contentTab.classList.remove("is-active")
        }
      })

    if (currentIsActive) {
      return
    }

    tab.classList.add("is-active")

    const contentTab = document.querySelector(`[data-tab-content="${tab.id}"]`)
    if (!!contentTab) {
      contentTab.classList.add("is-active")
    }
  }

  const messengerTabs = [...document.querySelectorAll(".messenger-tabs .tab")]
  for (const tab of messengerTabs) {
    tab.addEventListener("click", clickHandle(tab))
  }
}

document.addEventListener("DOMContentLoaded", tabsHandler)
window.addEventListener("resize", tabsHandler)
window.addEventListener("orientationchange", tabsHandler)
