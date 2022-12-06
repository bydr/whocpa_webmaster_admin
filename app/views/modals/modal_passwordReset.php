<div class="modal" id="modal-passwordReset" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">

                <div class="accent-icon">
                    <svg class="ui-icon">
                        <use xlink:href="img/_src/sprite.svg#warningCircle"></use>
                    </svg>
                </div>
                <br>
                <p class="text-size_default c-dark text-center"><b>Вы действительно хотите сбросить пароль?</b></p>
                <br>
                <div class="button_group button_group-row w-100 justify-center">
                    <button class="button button_accent js-btn-approve" data-modal="#modal-passwordUpdate">Сбросить</button>
                    <button class="button button_dark" data-modal-hide>Отмена</button>
                </div>

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
  const btnApprovePswrd = document.querySelector(".js-btn-approve")
  if (btnApprovePswrd) {
    btnApprovePswrd.addEventListener("click", function(){
      window.whocpa.modal.hide(btnApprovePswrd.closest(`[data-component="modal"]`))
    })
  }
</script>
