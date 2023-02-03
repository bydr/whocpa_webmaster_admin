import { Datepicker, DateRangePicker } from "vanillajs-datepicker"
import ru from "vanillajs-datepicker/locales/ru"
import { setGlobalImplementation } from "../helpers/utils"

const MODULE_NAME = "datepicker"

const LANGUAGE = "ru"
Object.assign(Datepicker.locales, ru)

const initDatePickers = () => {
  const datepickers = [
    ...document.querySelectorAll(`[data-component="datepicker"]`),
  ]

  for (const datepicker of datepickers) {
    const input = datepicker.querySelector("[data-input]")
    if (input) {
      new Datepicker(input, {
        language: LANGUAGE,
      })
      // datepicker.addEventListener("change", (e) => {
      //   console.log("value ", e.target.value)
      // })
    }
  }
}

const initRangePickers = () => {
  const rangepickers = [
    ...document.querySelectorAll(`[data-component="rangepicker"]`),
  ]

  for (const rangepicker of rangepickers) {
    const inputStart = rangepicker.querySelector("[data-input-start]")
    const inputEnd = rangepicker.querySelector("[data-input-end]")

    new DateRangePicker(rangepicker, {
      language: LANGUAGE,
      inputs: [inputStart, inputEnd],
    })
    // rangepicker.addEventListener("change", (e) => {
    //   console.log("value ", e.target.value)
    // })
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // initDatePickers()
  // initRangePickers()
})

setGlobalImplementation({
  moduleName: MODULE_NAME,
  payload: {
    initDatePickers: initDatePickers,
    initRangePickers: initRangePickers,
  },
})
