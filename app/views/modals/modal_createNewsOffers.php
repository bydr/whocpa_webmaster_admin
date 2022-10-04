<div class="modal" id="modal-createNewsOffers" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавление новости по офферам</h3>
                </div>
            </div>

            <form action="/" class="form">
              <div class="form-row">
                <div class="form-col">
                  <div class="form-control">
                    <select name="offer" class="js-choice custom-select"
                            data-search>
                      <option value="" disabled selected>Выберите оффер</option>
                      <option value="offer1">Оффер 1</option>
                      <option value="offer2">Оффер 2</option>
                      <option value="offer3">Оффер 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <select name="offer" class="js-choice custom-select"
                            data-search>
                      <option value="" disabled selected>Категория новости</option>
                      <option value="category1">Категория 1</option>
                      <option value="category2">Категория 2</option>
                      <option value="category3">Категория 3</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-control">
                  <textarea class="textarea-element" name="message" placeholder="Сообщение"></textarea>
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

