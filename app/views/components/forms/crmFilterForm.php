<form class="form form_view-row" action="#">
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <select name="publisher" id="publisher" class="js-choice custom-select"
                data-search
                data-select-type="ajax"
                data-endpoint-url="https://jsonplaceholder.typicode.com/users"
                data-endpoint-params="name^=#macros#"
                data-endpoint-fields="id,name"
        >
          <option value="" disabled selected>Паблишер</option>
        </select>
      </div>
    </div>
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
        <select name="traffic" id="traffic" class="js-choice custom-select" multiple data-search>
          <option value="" disabled selected>Трафик</option>
          <option value="traffic1">Трафик 1</option>
          <option value="traffic2">Трафик 2</option>
          <option value="traffic3">Трафик 3</option>
          <option value="traffic4">Трафик 4</option>
        </select>
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <select name="vertical" id="vertical" class="js-choice custom-select" multiple data-search>
          <option value="" disabled selected>Вертикаль</option>
          <option value="vertical1">Вертикаль 1</option>
          <option value="vertical2">Вертикаль 2</option>
          <option value="vertical3">Вертикаль 3</option>
          <option value="vertical4">Вертикаль 4</option>
        </select>
      </div>
    </div>
  </div>
</form>
