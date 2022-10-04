const formsSteps = [...document.querySelectorAll(`[data-form-steps]`)]

const toggleStepsHandle = () => {
  for (const form of formsSteps) {
    const steps = [...form.querySelectorAll("[data-step]")]
    for (const [index, step] of steps.entries()) {
      const trigger = step.querySelector("[data-step-next]")

      if (!!trigger) {
        const stepHandle = () => {
          steps.map((s) => {
            s.classList.remove("is-active")
          })
          steps
            .find((s) => s.dataset.step === trigger.dataset.stepNext)
            ?.classList.add("is-active")
        }

        trigger.addEventListener("click", stepHandle)
      }
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  toggleStepsHandle()
})
