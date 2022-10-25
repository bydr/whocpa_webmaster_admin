//загрузка Drag n Drop файлов
const dropFileForms = [...document.querySelectorAll(".dropFileForm")]

for (const containerForm of dropFileForms) {
  const fileLabelText = containerForm.querySelector(".fileLabelText")
  const uploadStatus = containerForm.querySelector(".uploadStatus")
  const fileInput = containerForm.querySelector(".fileInput")
  const fileLabel = containerForm.querySelector(".fileLabel")
  let droppedFiles

  function overrideDefault(event) {
    event.preventDefault()
    event.stopPropagation()
  }

  function fileHover() {
    containerForm.classList.add("fileHover")
  }

  function fileHoverEnd() {
    containerForm.classList.remove("fileHover")
  }

  function addFiles(event) {
    droppedFiles = event.target.files || event.dataTransfer.files
    showFiles(droppedFiles)
  }

  function showFiles(files) {
    if (files.length > 1) {
      fileLabelText.innerText = files.length + " files selected"
    } else {
      fileLabelText.innerText = files[0].name
    }
  }

  function uploadFiles(event) {
    event.preventDefault()
    changeStatus("Uploading...")

    var formData = new FormData()

    for (var i = 0, file; (file = droppedFiles[i]); i++) {
      formData.append(fileInput.name, file, file.name)
    }

    var xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function (data) {
      //handle server response and change status of
      //upload process via changeStatus(text)
      console.log(xhr.response)
    }
    xhr.open(containerForm.method, containerForm.action, true)
    xhr.send(formData)
  }

  function changeStatus(text) {
    uploadStatus.innerText = text
  }

  fileLabel.addEventListener("dragover", (e) => {
    overrideDefault(e)
    fileHover()
  })
  fileLabel.addEventListener("dragenter", (e) => {
    overrideDefault(e)
    fileHover()
  })
  fileLabel.addEventListener("dragleave", (e) => {
    overrideDefault(e)
    fileHoverEnd()
  })
  fileLabel.addEventListener("drop", (e) => {
    overrideDefault(e)
    fileHoverEnd()
    addFiles(e)
  })
  fileInput.addEventListener("change", (e) => {
    addFiles(e)
  })
  containerForm.addEventListener("submit", (e) => {
    uploadFiles(e)
  })
}

//загрузка Drag n Drop файлов
