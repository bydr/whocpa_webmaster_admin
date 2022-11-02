<form class="form form_view-row" action="#">
  <div class="form-row">
    <div class="form-col flex-4">
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
        <select name="publisher_lvl" id="publisher_lvl" class="js-choice custom-select" data-search>
          <option value="" disabled selected>Уровень паблишера</option>
          <option value="vertical1">Уровень паблишера 1</option>
          <option value="vertical2">Уровень паблишера 2</option>
          <option value="vertical3">Уровень паблишера 3</option>
          <option value="vertical4">Уровень паблишера 4</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <select name="publisher" id="publisher" class="js-choice custom-select" data-search>
          <option value="" disabled selected>Паблишер</option>
          <option value="vertical1">Паблишер 1</option>
          <option value="vertical2">Паблишер 2</option>
          <option value="vertical3">Паблишер 3</option>
          <option value="vertical4">Паблишер 4</option>
        </select>
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <select name="wallet_type" id="wallet_type" class="js-choice custom-select">
          <option value="" disabled selected>Тип кошелька</option>
          <option value="vertical1">Тип кошелька 1</option>
          <option value="vertical2">Тип кошелька 2</option>
          <option value="vertical3">Тип кошелька 3</option>
          <option value="vertical4">Тип кошелька 4</option>
        </select>
      </div>
    </div>
    <div class="form-col flex-2">
      <div class="form-control">
        <div class="rangepicker-container" data-component="rangepicker">
          <label class="rangepicker-label text-size_medium">Дата создания:</label>
          <div class="rangepicker-range">
            <div class="rangepicker-start">
              <label for="rp-s">от</label>
              <input type="text" id="rp-s" class="rangepicker-input" data-input-start>
            </div>
            <div class="rangepicker-end">
              <label for="rp-e">до</label>
              <input type="text" id="rp-e" class="rangepicker-input" data-input-end>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-col flex-2">
      <div class="form-control">
        <div class="rangepicker-container" data-component="rangepicker">
          <label class="rangepicker-label text-size_medium">Дата закрытия:</label>
          <div class="rangepicker-range">
            <div class="rangepicker-start">
              <label for="rp-s2">от</label>
              <input type="text" id="rp-s2" class="rangepicker-input" data-input-start>
            </div>
            <div class="rangepicker-end">
              <label for="rp-e2">до</label>
              <input type="text" id="rp-e2" class="rangepicker-input" data-input-end>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
