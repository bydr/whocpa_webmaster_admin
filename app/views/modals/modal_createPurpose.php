<div class="modal" id="modal-createPurpose" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавить цель</h3>
                </div>

                <form action="/" class="form">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Оффер ID">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Название оффера">
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <select name="purpose" class="js-choice custom-select">
                          <option value="" disabled selected>Цель</option>
                          <option value="p1">Цель 1</option>
                          <option value="p2">Цель 2</option>
                          <option value="p3">Цель 3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Описание цели">
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Цена на лендинге">
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
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Холд">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <select name="status" id="status" class="js-choice custom-select">
                          <option value="" disabled selected>Валюта цели</option>
                          <option value="status1">Валюта цели 1</option>
                          <option value="status2">Валюта цели 2</option>
                          <option value="status3">Валюта цели 3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Ставка адверта">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Ставка паблишера">
                      </div>
                    </div>
                  </div>

                  <div class="form-row w-100 justify-center">
                    <div class="form-control flex-initial w-auto">
                      <label class="checkbox checkbox-type__check">
                        <input type="checkbox" name="checkbox">
                        <span class="checkbox-inner">
                              <span class="checkbox-box">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#check"></use>
                                </svg>
                              </span>
                              <span class="checkbox-text text-size_medium fw-normal">Ставка фиксированная</span>
                          </span>
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="button_group button_group-row w-100 justify-center">
                          <button type="submit" class="button button_accent" >Сохранить</button>
                      <button type="button" class="button button_dark" data-modal-hide>Отменить</button>
                      </div>
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


