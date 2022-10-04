<div class="modal" id="modal-createNewsStopOffer" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Остановка оффера</h3>
                </div>
            </div>

          <form action="/" class="form">
            <div class="form-row">
              <div class="form-col">
                <div class="form-control">
                  <select name="offer" class="js-choice custom-select"
                          data-search>
                    <option value="" disabled selected>Выбор оффера</option>
                    <option value="offer1">Оффер 1</option>
                    <option value="offer2">Оффер 2</option>
                    <option value="offer3">Оффер 3</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-col">
                <div class="form-control">
                  <div class="datepicker-container" data-component="datepicker">
                    <label class="datepicker-label">Дата остановки:</label>
                    <input type="text" class="datepicker-input" data-input>
                  </div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-control">
                  <select name="offer" class="js-choice custom-select"
                          data-search>
                    <option value="" disabled selected>Время</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-control">
                <textarea class="textarea-element" name="message" placeholder="Комментарий"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="button_group button_group-row w-100 justify-center">
                <button type="submit" class="button button_accent" >Создать</button>
              </div>
            </div>
          </form>

            <button type="button" class="button modal-close" data-modal-hide>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#x"></use>
                </svg>
            </button>
        </div>
    </div>
</div>

