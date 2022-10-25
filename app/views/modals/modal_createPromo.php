<div class="modal" id="modal-createPromo" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавление промо</h3>
                </div>

              <form action="/" class="form form-steps" data-form-steps>

                <div class="step-wrapper is-active" data-step="1">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <select name="typeUser" id="typeUser" class="js-choice custom-select"
                                data-search>
                          <option value="" disabled selected>Кому рассылаем?</option>
                          <option value="typeUser1">Тип 1</option>
                          <option value="typeUser2">Тип 2</option>
                          <option value="typeUser3">Тип 3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="button_group button_group-row w-100 justify-center">
                    <button type="button" class="button button_accent" data-step-next="2">Далее</button>
                    <button type="button" class="button button_dark" data-modal-hide>Закрыть</button>
                  </div>
                </div>

                <div class="step-wrapper" data-step="2">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input id="titleBanner" type="text" placeholder="Название">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <select name="language" id="typeUser" class="js-choice custom-select"
                                data-search>
                          <option value="" disabled selected>Язык материала</option>
                          <option value="typeUser1">Русский</option>
                          <option value="typeUser2">Английский</option>
                          <option value="typeUser3">Французский</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                      <?php include "views/components/fileUploader.php"?>

                  </div>

                  <div class="button_group button_group-row w-100 justify-center">
                    <button type="button" class="button button_accent" data-step-next="3">Следующий шаг</button>
                    <button type="button" class="button button_dark" data-modal-hide>Отменить</button>
                  </div>
                </div>

                <div class="step-wrapper" data-step="3">

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input id="titleBannerPrelanding" type="text" placeholder="Название">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input id="link" type="text" placeholder="Ссылка редиректа">
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input id="template" type="text" placeholder="Шаблон">
                      </div>
                    </div>
                  </div>

                  <div class="button_group button_group-row w-100 justify-center">
                    <button type="submit" class="button button_accent" >Добавить</button>
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


