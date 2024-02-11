<section class="offer">
  <div class="offer-header">
        <button class="button button_variant-box button_light">
            <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleLeft"></use>
            </svg>
        </button>
      <h2 class="h3 mt-5">(168629) Название до 16 с. <span class="flag"><img src="img/_src/flags/mx.svg" alt=""></span></h2>
      <div class="offer-header__side">
        <label class="checkbox checkbox-type__radio checkbox_panel">
          <input type="checkbox" name="checkbox" checked readonly disabled>
          <span class="checkbox-inner">
                  <span class="checkbox-text">Топовый</span>
                  <span class="checkbox-box"></span>
                  <span class="checkbox-text">Приватный</span>
              </span>
        </label>
      </div>
    </div>
  <div class="offer-detail">
    <form action="/" method="post" class="offer-detail__edit form">

        <div class="panel panel-stats">
          <div class="panel-inner">
            <div class="panel-header panel-header_underline">
              <p class="text-size_default"><b>Редактирование оффера</b></p>
              <div class="button_group button_group-row">
                <button type="submit" class="button button_accent">Сохранить</button>
                <button type="button" class="button button_dark">Отменить</button>
              </div>
            </div>
            <div class="panel-body">

              <div class="offer-edit__container">
                <div class="form-col">
                  <div class="form-control">
                    <label for="field1">Название:</label>
                    <input id="field1" type="text" placeholder="Название" >
                  </div>
                  <div class="datepicker-container datepicker_view-default" data-component="datepicker">
                    <label class="datepicker-label">Дата старта:</label>
                    <input type="text" class="datepicker-input" data-input>
                  </div>
                  <div class="form-control">
                    <label>Статус:</label>
                    <select name="status" id="status" class="js-choice custom-select">
                      <option value="" selected>Статус</option>
                      <option value="status1">Статус 1</option>
                      <option value="status2">Статус 2</option>
                      <option value="status3">Статус 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <label for="field3">Рекламодатель:</label>
                    <input id="field3" type="text" placeholder="Рекламодатель" >
                  </div>
                  <div class="datepicker-container datepicker_view-default" data-component="datepicker">
                    <label class="datepicker-label">Дата остановки:</label>
                    <input type="text" class="datepicker-input" data-input>
                  </div>
                  <div class="form-control">
                    <label for="field4">Время жизни куков:</label>
                    <input id="field4" type="text" placeholder="Время жизни" >
                  </div>
                </div>
                <div class="form-col">



                    <?php include "fileUploader.php"?>
                </div>
              </div>

              <div class="offer-edit__container">
                <div class="offer-edit__row-3">
                  <div class="form-col">
                    <div class="form-control">
                      <label for="field2">Краткое описание:</label>
                      <input id="field2" type="text" placeholder="Краткое описание" >
                    </div>
                  </div>
                  <div class="form-col">
                    <div class="form-control form-control_view-col">
                      <label for="field2">Полное описание:</label>
                      <textarea id="field2" type="text" placeholder="Полное описание" class="textarea-element"></textarea>
                    </div>
                  </div>
                  <div class="form-col">
                    <div class="form-control form-control_view-col">
                      <label for="field2">Ингредиенты:</label>
                      <textarea id="field2" type="text" placeholder="Полное описание" class="textarea-element"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="offer-edit__container">
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Категория:</label>
                    <input id="field2" type="text" placeholder="Категория" >
                  </div>
                  <div class="form-control">
                    <label for="field2">Домашняя страница:</label>
                    <input id="field2" type="text" placeholder="Домашняя страница" >
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Типы трафика:</label>
                    <input id="field2" type="text" placeholder="Типы трафика" >
                  </div>
                  <div class="form-control">
                    <label for="field2">Utm Type:</label>
                    <input id="field2" type="text" placeholder="Utm Type" >
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Страна:</label>
                    <input id="field2" type="text" placeholder="Страна" >
                  </div>
                  <div class="form-control">
                    <label for="field2">Маска UTM:</label>
                    <input id="field2" type="text" placeholder="Маска UTM" >
                  </div>
                </div>
              </div>

              <div class="offer-edit__container">
                <div class="offer-edit__row-3">
                  <div class="form-control">
                    <label for="field2">Комментарий для менеджера:</label>
                    <input id="field2" type="text" placeholder="Комментарий для менеджера" >
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="panel panel-stats">
          <div class="panel-inner">
            <div class="panel-header panel-header_underline">
              <p class="text-size_default"><b>Прочее</b></p>
            </div>
            <div class="panel-body">
              <div class="offer-edit__container">
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Язык оффера:</label>
                    <select name="status" id="status" class="js-choice custom-select" multiple>
                      <option value="" disabled selected>Язык</option>
                      <option value="status1">Язык 1</option>
                      <option value="status2">Язык 2</option>
                      <option value="status3">Язык 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Время работы КЦ:</label>
                    <input id="field2" type="text" placeholder="Время работы" >
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <label for="field2">Процент подтверждения:</label>
                    <input id="field2" type="text" placeholder="Процент подтверждения" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="panel panel-stats">
        <div class="panel-inner">
          <div class="panel-header panel-header_underline">
            <p class="text-size_default"><b>Лендинги</b></p>
          </div>
          <div class="panel-body">
            <div class="offer-edit__container">
              <div class="form-col">
                <div class="form-control">
                  <label for="field2">ID:</label>
                  <input id="field2" type="text" placeholder="ID" >
                </div>
              </div>
              <div class="form-col">
                <div class="form-control">
                  <label for="field2">Название:</label>
                  <input id="field2" type="text" placeholder="Название" >
                </div>
              </div>
              <div class="form-col">
                <div class="form-control">
                  <label for="field2">Ссылка:</label>
                  <input id="field2" type="text" placeholder="Ссылка" >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-stats">
        <div class="panel-inner">
          <div class="panel-header panel-header_underline">
            <p class="text-size_default"><b>Лендинги</b></p>
          </div>
          <div class="panel-body">
            <div class="offer-landing__list">
              <?php for($i = 0; $i <= 2; $i++): ?>
                <div class="offer-landing__item">
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>ID:</b>
                      <span class="text-size_medium c-gray-darken">4812</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Описание:</b>
                      <span class="text-size_medium c-gray-darken">th-fortune-amulet</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Холд:</b>
                      <span class="text-size_medium c-gray-darken">4</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Активность:</b>
                      <span class="text-size_medium c-gray-darken">Активна</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Категория:</b>
                      <span class="text-size_medium c-gray-darken">CPA</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Валюта:</b>
                      <span class="text-size_medium c-gray-darken">USD</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Оплата:</b>
                      <span class="text-size_medium c-gray-darken">24$</span>
                    </p>
                  </div>
                  <div class="form-col">
                    <p class="text-size_default">
                      <b>Паблишеру:</b>
                      <span class="text-size_medium c-gray-darken">10$</span>
                    </p>
                  </div>
                  <div class="form-col d-flex justify-end">
                    <button class="button button_variant-box js-modal-mock" type="button" >
                      <svg class="ui-icon">
                        <use xlink:href="img/_src/sprite.svg#editPencilOutline"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>

      </form>
  </div>
</section>


<script>
  const mocks = [...document.querySelectorAll(`.js-modal-mock`)]

  for (const mock of mocks) {
    mock.addEventListener("click", () => {
      const targetModal = document.querySelector(`#modal-createLanding`)
      if (!!targetModal) {
        window.whocpa.modal.show(targetModal)
      }
    })
  }
</script>
