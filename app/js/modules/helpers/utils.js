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
