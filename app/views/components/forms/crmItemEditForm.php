<form class="form" action="#">
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <select name="status" id="status" class="js-choice custom-select">
          <option value="" disabled selected>Статус</option>
          <option value="status1">Статус 1</option>
          <option value="status2">Статус 2</option>
          <option value="status3">Статус 3</option>
        </select>
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <div class="datepicker-container" data-component="datepicker">
          <label class="datepicker-label">Дата напоминания:</label>
          <input type="text" class="datepicker-input" data-input>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-control">
      <textarea class="textarea-element" name="comment" placeholder="Комментарий"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <select name="traffic" id="traffic" class="custom-select" multiple>
          <option value="" disabled selected>Трафик</option>
          <option value="manager1">Трафик 1</option>
          <option value="manager2">Трафик 2</option>
          <option value="manager3">Трафик 3</option>
          <option value="manager4">Трафик 4</option>
        </select>
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <select name="vertical" id="vertical" class="custom-select"
                data-theme="secondary" multiple>
          <option value="" disabled selected>Вертикаль</option>
          <option value="manager1">Вертикаль 1</option>
          <option value="manager2">Вертикаль 2</option>
          <option value="manager3">Вертикаль 3</option>
          <option value="manager4">Вертикаль 4</option>
        </select>
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
