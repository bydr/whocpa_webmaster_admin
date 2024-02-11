<div class="modal" id="modal-editSpecialCondition" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Редактировать спец. условие</h3>
                </div>

                <form action="/" class="form">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <select name="status" id="status" class="js-choice custom-select" multiple>
                          <option value="" disabled selected>Offer ID</option>
                          <option value="status1" selected>Пример значения 1</option>
                          <option value="status2">Пример значения 2</option>
                          <option value="status3">Пример значения 3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-control">
                                <input id="title" type="text" placeholder="Creative">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-control">
                                <input id="link" type="text" placeholder="Source">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                      <div class="form-col">
                        <div class="form-control">
                          <input id="title" type="text" placeholder="Что это значит">
                        </div>
                      </div>
                      <div class="form-col">
                        <div class="form-control">
                          <input id="link" type="text" placeholder="Ставка для веба">
                        </div>
                      </div>
                    </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input id="title" type="text" placeholder="Холд">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input id="link" type="text" placeholder="Ставка паблишера от заказа">
                      </div>
                    </div>
                  </div>
                  <br>

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


