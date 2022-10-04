<form action="/" class="form">
    <div class="form-row">
        <div class="form-col">
            <div class="form-control">
                <input id="login" type="text" placeholder="Введите ID или имя" value="positivelight">
            </div>
        </div>
        <div class="form-col">
            <div class="form-control">
                <input id="login" type="text" placeholder="Тема" value="positivelight">
            </div>
        </div>
    </div>

    <div class="form-row">
      <div class="form-col">
        <div class="form-control">
          <select name="traffic" id="traffic" class="custom-select" >
            <option value="" disabled selected>Категория</option>
            <option value="manager1">Категория 1</option>
            <option value="manager2">Категория 2</option>
            <option value="manager3">Категория 3</option>
            <option value="manager4">Категория 4</option>
          </select>
        </div>
      </div>
    </div>

  <div class="form-row">
    <div class="button_group button_group-row w-100">
      <label class="checkbox checkbox-type__check">
        <input type="checkbox" name="checkbox">
        <span class="checkbox-inner">
            <span class="checkbox-box">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#check"></use>
              </svg>
            </span>
          <span class="checkbox-text text-size_medium">
            Отправить всем вебмастерам
          </span>
        </span>
      </label>
      <label class="checkbox checkbox-type__check">
        <input type="checkbox" name="checkbox">
        <span class="checkbox-inner">
            <span class="checkbox-box">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#check"></use>
              </svg>
            </span>
          <span class="checkbox-text text-size_medium">
            Обязательный тикет
          </span>
        </span>
      </label>
    </div>
  </div>

  <div class="form-row">
    <div class="button_group button_group-row w-100 justify-center">
      <button type="button" class="button button_accent">
        <svg class="ui-icon">
          <use xlink:href="img/_src/sprite.svg#upload"></use>
        </svg>
      <span>Добавить файл</span>
      </button>
    </div>
  </div>

    <div class="form-row">
        <div class="form-col">
            <div class="form-control">
                <textarea class="textarea-element" name="message" placeholder="Сообщение"></textarea>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="button_group button_group-row w-100 justify-center">
            <button class="button button_accent">Сохранить</button>
            <button class="button button_dark" data-modal-hide>Отмена</button>
        </div>
    </div>
</form>
