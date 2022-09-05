<div class="modal" id="modal-sendNewProfileDataSuccess" data-component="modal">
  <div class="modal-wrapper">
    <div class="modal-content">
      <div class="modal-content__body">

        <div class="accent-icon">
          <svg class="ui-icon">
            <use xlink:href="img/_src/sprite.svg#checkCircle"></use>
          </svg>
        </div>
        <br>
        <p class="text-size_default c-dark text-center"><b>Пароль успешно отправлен партнёру ID и Login</b></p>
        <br>
        <p class="text-center">
          <button class="button button_accent js-mock-handle" type="button">Ок</button>
        </p>

      </div>
      <button type="button" class="button modal-close" data-modal-hide>
        <svg class="ui-icon">
          <use xlink:href="img/_src/sprite.svg#x"></use>
        </svg>
      </button>
    </div>
  </div>
</div>

<script>
  const button = document.querySelector(".js-mock-handle")
  button.addEventListener("click", () => {
    window.whocpa.modal.hide(document.getElementById("modal-sendNewProfileData"))
    window.whocpa.modal.hide(button.closest(`[data-component="modal"]`))
  })
</script>
