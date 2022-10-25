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
      <div class="form-col">
        <div class="form-control">
          <select name="status" id="status" class="js-choice custom-select">
            <option value="" disabled selected>Страна</option>
            <option value="mx">
              Мексика
            </option>
            <option value="in">
              Индия
            </option>
            <option value="id">
              Индонезия
            </option>
          </select>
        </div>
      </div>
      <div class="form-col">
        <div class="form-control">
          <select name="traffic" id="traffic" class="js-choice custom-select">
            <option value="" disabled selected>Категория</option>
            <option value="category1">Категория 1</option>
            <option value="category2">Категория 2</option>
            <option value="category3">Категория 3</option>
            <option value="category4">Категория 4</option>
          </select>
        </div>
      </div>

      <div class="form-col">
        <div class="form-control">
          <select name="atizer" id="atizer" class="js-choice custom-select" data-search>
            <option value="" disabled selected>Рекламодатель</option>
            <option value="atizer">Рекламодатель 1</option>
            <option value="atizer">Рекламодатель 2</option>
            <option value="atizer">Рекламодатель 3</option>
            <option value="atizer">Рекламодатель 4</option>
          </select>
        </div>
      </div>
      <div class="form-col flex-initial">
        <div class="form-control">
          <label class="checkbox checkbox-type__radio checkbox-text__top">
            <input type="checkbox" name="checkbox">
            <span class="checkbox-inner">
                <span class="checkbox-box"></span>
                <span class="checkbox-text">Активные офферы</span>
            </span>
          </label>
        </div>
      </div>
      <div class="form-col flex-initial">
        <div class="form-control">
          <label class="checkbox checkbox-type__radio checkbox-text__top">
            <input type="checkbox" name="checkbox">
            <span class="checkbox-inner">
                <span class="checkbox-box"></span>
                <span class="checkbox-text">Приватные офферы</span>
            </span>
          </label>
        </div>
      </div>
    </div>
</form>
