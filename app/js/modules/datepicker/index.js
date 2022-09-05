import { Datepicker } from "vanillajs-datepicker"
import ru from "vanillajs-datepicker/locales/ru"

Object.assign(Datepicker.locales, ru)

const elements = [...document.querySelectorAll(`[data-component="datepicker"]`)]

for (const datepicker of elements) {
  new Datepicker(datepicker, {
    // ...options
    language: "ru",
  })
  datepicker.addEventListener("change", (e) => {
    console.log("value ", e.target.value)
  })
}
