<div class="modal" id="modal-passwordUpdate" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">

              <div class="modal-title">
                <h3>Изменение пароля</h3>
              </div>

              <form action="/" class="form">
                <div class="form-group">
                  <div class="form-control">
                    <input name="pswrd" type="password" placeholder="Новый пароль">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-control">
                    <input name="pswrdRepeat" type="password" placeholder="Повторите пароль">
                  </div>
                </div>
                <div class="form-group">
                  <button class="button button_accent">Сгенерировать пароль</button>
                </div>
                <br>
                <div class="button_group button_group-row w-100 justify-center">
                    <button class="button button_accent" >Изменить</button>
                    <button class="button button_dark" type="button" data-modal-hide>Отмена</button>
                </div>
              </form>

            </div>
            <button type="button" class="button modal-close" data-modal-hide>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#x"></use>
                </svg>
            </button>
        </div>
    </div>
</div>
