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

export const _getRandomColor = () =>
  `#${Math.floor(Math.random() * 16777215).toString(16)}`

export const PALETTE_DEFAULT = ["#D80CFE", "#2544D3"]

export const hexToRgbA = (hex, alpha) => {
  var r = parseInt(hex.slice(1, 3), 16),
    g = parseInt(hex.slice(3, 5), 16),
    b = parseInt(hex.slice(5, 7), 16)

  if (alpha !== undefined) {
    return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")"
  } else {
    return "rgb(" + r + ", " + g + ", " + b + ")"
  }
}
