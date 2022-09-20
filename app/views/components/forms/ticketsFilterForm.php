<form class="form form_view-row" action="#">
    <div class="form-row">
        <div class="form-col">
            <div class="form-control">
                <div class="input-element input-element__w-button">
                    <input type="text" placeholder="Поиск">
                    <button class="button button-field" type="button">
                        <svg class="ui-icon">
                            <use xlink:href="img/_src/sprite.svg#search"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="form-col flex-initial">
          <div class="form-control ">
            <label class="checkbox checkbox-type__radio checkbox-text__top">
              <input type="checkbox" name="checkbox" checked>
              <span class="checkbox-inner">
                <span class="checkbox-box"></span>
                <span class="checkbox-text">Только открытые</span>
            </span>
            </label>
          </div>
        </div>
      <div class="form-col flex-initial">
        <div class="button_group button_group-row">
          <button class="button button_accent" type="button" data-modal="#modal-createTicket">Добавить</button>
          <button class="button button_secondary" type="button">Применить</button>
          <button class="button button_dark" type="button">Сброс</button>
        </div>
      </div>
    </div>

</form>
