import { Datepicker, DateRangePicker } from "vanillajs-datepicker"
import ru from "vanillajs-datepicker/locales/ru"

Object.assign(Datepicker.locales, ru)

const datepickers = [
  ...document.querySelectorAll(`[data-component="datepicker"]`),
]
const rangepickers = [
  ...document.querySelectorAll(`[data-component="rangepicker"]`),
]
for (const datepicker of datepickers) {
  const input = datepicker.querySelector("[data-input]")
  new Datepicker(input, {
    // ...options
    language: "ru",
  })
  datepicker.addEventListener("change", (e) => {
    console.log("value ", e.target.value)
  })
}

for (const rangepicker of rangepickers) {
  console.log("rangepicker ", rangepicker)
  const inputStart = rangepicker.querySelector("[data-input-start]")
  const inputEnd = rangepicker.querySelector("[data-input-end]")

  new DateRangePicker(rangepicker, {
    // ...options
    language: "ru",
    inputs: [inputStart, inputEnd],
  })
  rangepicker.addEventListener("change", (e) => {
    console.log("value ", e.target.value)
  })
}
