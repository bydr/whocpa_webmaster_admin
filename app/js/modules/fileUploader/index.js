const SELECTOR = ".fl_default"
function formatSize(length) {
  var i = 0,
    type = ["б", "Кб", "Мб", "Гб", "Тб", "Пб"]
  while ((length / 1000) | 0 && i < type.length - 1) {
    length /= 1024
    i++
  }
  return length.toFixed(2) + " " + type[i]
}

export const initUploader = () => {
  console.log("document change")
  // if (!e.target.matches(SELECTOR) && !e.target.closest(SELECTOR)) {
  //   return
  // }

  const uploaders = [...document.querySelectorAll(SELECTOR)]
  console.log("uploaders ", uploaders)
  for (const uploader of uploaders) {
    uploader.addEventListener("change", (e) => {
      let filename = "<ul class='uploaded-file'>"
      for (let i = 0; i < e.target.files.length; i++) {
        filename += `<li><span class="uploaded-file-info"><span class="uploaded-file-name">${
          e.target.files[i].name
        }</span><span class="uploaded-file-size text-secondary">${formatSize(
          e.target.files[i].size,
        )}</span></span></li>`
      }
      filename += "</ul>"

      const nm = uploader.closest(".fl_upld").querySelector(".fl_nm")
      console.log("nm ", nm)
      nm.innerHTML = filename
      nm.classList.add("selected_file")
    })
  }
}
