
export const setGlobalImplementation = ({moduleName, payload}) => {
  const GLOBAL_AREA_NAME = "whocpa"
  if (window !== undefined) {
    if (window[GLOBAL_AREA_NAME] === undefined) {
      window[GLOBAL_AREA_NAME] = {}
    }
    window[GLOBAL_AREA_NAME][moduleName] = payload
  }
}

export const getCurrentTarget = (e, conditionCurrent, selectorParent) => {
  let { target } = e

  if (conditionCurrent) {
    e.preventDefault()
    return target
  }
  if (target.closest(selectorParent)) {
    e.preventDefault()
    return target.closest(selectorParent)
  }
  return null
}
