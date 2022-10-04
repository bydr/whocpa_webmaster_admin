<form class="form form-leads-filter form_visible-partitial" action="#">
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
        <div class="button_group button_group-row">
          <button class="button button_secondary" type="submit">Применить</button>
          <button class="button button_dark" type="button">Сброс</button>
        </div>
      </div>
    </div>
    <div class="form-row form-leads-grid-row">
      <div class="form-col">
          <div class="form-control">
              <select name="offer" id="offer" class="js-choice custom-select" data-search>
                  <option value="" disabled selected>Оффер</option>
                  <option value="offer1">Оффер 1</option>
                  <option value="offer2">Оффер 2</option>
                  <option value="offer3">Оффер 3</option>
                  <option value="offer4">Оффер 4</option>
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
      <div class="form-col grid_col_span-3 visible-toggled">
        <div class="form-control">
          <div class="input-element input-element__w-button">
            <input type="text" placeholder="Поиск по источнику">
            <button class="button button-field" type="button">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="form-col visible-toggled">
        <div class="form-control">
          <div class="input-element input-element__w-button">
            <input type="text" placeholder="Поиск по click_id, через запятую">
            <button class="button button-field" type="button">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="form-col visible-toggled">
        <div class="form-control">
          <div class="input-element input-element__w-button">
            <input type="text" placeholder="Поиск по tid">
            <button class="button button-field" type="button">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="form-col visible-toggled">
        <div class="form-control">
          <div class="input-element input-element__w-button">
            <input type="text" placeholder="Поиск по cr_id">
            <button class="button button-field" type="button">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="form-col visible-toggled">
        <div class="form-control">
          <select name="timezone" id="timezone" class="js-choice custom-select" data-search>
            <option value="" disabled selected>Таймзона</option>
            <option value="timezone1">Таймзона 1</option>
            <option value="timezone2">Таймзона 2</option>
            <option value="timezone3">Таймзона 3</option>
            <option value="timezone4">Таймзона 4</option>
          </select>
        </div>
      </div>
      <div class="form-col visible-toggled">
        <div class="form-control">
          <select name="perPage" id="perPage" class="js-choice custom-select">
            <option value="" disabled selected>Лидов на странице</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
        </div>
      </div>
      <div class="form-col col-toggled">
        <button class="button button_link js-button_toggle text-underline_dashed c-accent" type="button" data-component="toggleButton" data-toggle-text="Скрыть">
          <span data-content>Расширенный фильтр</span>
          <svg class="ui-icon">
            <use xlink:href="img/_src/sprite.svg#filterAdd"></use>
          </svg>
        </button>
      </div>
    </div>
</form>

<script>
  const buttons = [...document.querySelectorAll(`[data-component="toggleButton"]`)]
  for (const btn of buttons) {
    btn.addEventListener("click", (e) => {
      e.preventDefault()
      const form = btn.closest(".form")

      window.whocpa.toggleButton.toggle(btn, {
        cbActive: () => {
          form.classList.add("is-toggled")
        },
        cbDisable: () => {
          form.classList.remove("is-toggled")
        }
      })
    })
  }

</script>
