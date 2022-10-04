<form action="/" class="form form_view-row">
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
    <div class="form-col">
      <div class="form-control">
        <div class="datepicker-container">
          <label class="datepicker-label">Время напоминания:</label>
          <input type="time" class="datepicker-input">
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <textarea class="textarea-element" name="message" placeholder="Ваше сообщение"></textarea>
      </div>
    </div>
    <div class="form-col flex-initial">
      <button class="button button_accent">Отправить</button>
    </div>
  </div>
</form>
