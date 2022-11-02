export const _getTimesLabels = ({ step = 2 }) => {
  const labels = []
  const date = new Date()
  date.setHours(0, 0, 0, 0)
  const HOURS_LIMIT = 24
  const STEP = step
  let i = 0
  while (i < HOURS_LIMIT) {
    const time = date.toLocaleTimeString().split(":")
    labels.push(`${time[0]}:${time[1]}`)
    date.setHours(date.getHours() + STEP)
    i += STEP
  }

  return labels
}

export const _getRandomColor = (alpha = 1) => {
  const r = Math.floor(Math.random() * 255)
  const g = Math.floor(Math.random() * 255)
  const b = Math.floor(Math.random() * 255)
  console.log(
    "`rgba(${r},${g},${b},${alpha})` ",
    `rgba(${r},${g},${b},${alpha})`,
  )
  return `rgba(${r},${g},${b},${alpha})`
}

export const PALETTE_DEFAULT = ["rgba(216, 12, 254, 1)", "rgba(37,68,211,1)"]

export const hexToRgbA = (hex, alpha = 1) => {
  var r = parseInt(hex.slice(1, 3), 16),
    g = parseInt(hex.slice(3, 5), 16),
    b = parseInt(hex.slice(5, 7), 16)

  if (alpha !== undefined) {
    return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")"
  } else {
    return "rgb(" + r + ", " + g + ", " + b + ")"
  }
}

export const _tranparentizeRgbA = (rgba, alpha = 1) => {
  const formattedColor = rgba
    .replaceAll(" ", "")
    .replaceAll("rgba(", "")
    .replaceAll(")", "")
    .split(",")
  const r = +formattedColor[0]
  const g = +formattedColor[1]
  const b = +formattedColor[2]

  return `rgba(${r},${g},${b},${alpha})`
}
