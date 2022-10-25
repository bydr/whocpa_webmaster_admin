<div class="modal" id="modal-createLanding" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавить лендинг</h3>
                </div>

                <form action="/" class="form">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <select name="purpose" class="js-choice custom-select" multiple>
                          <option value="" disabled selected>Оффер</option>
                          <option value="p1">Цель 1</option>
                          <option value="p2">Цель 2</option>
                          <option value="p3">Цель 3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="radio-group radio-group_col-2">
                        <label class="radio">
                          <input type="radio" name="landing">
                          <span class="radio-inner">
                              <span class="radio-box"></span>
                              <span class="radio-text">Приватный лендинг</span>
                          </span>
                        </label>
                        <label class="radio">
                          <input type="radio" name="landing">
                          <span class="radio-inner">
                              <span class="radio-box"></span>
                              <span class="radio-text">Аппрувнутый лендинг</span>
                          </span>
                        </label>
                        <label class="radio">
                          <input type="radio" name="landing">
                          <span class="radio-inner">
                              <span class="radio-box"></span>
                              <span class="radio-text">Оптимизирован под десктоп</span>
                          </span>
                        </label>
                        <label class="radio">
                          <input type="radio" name="landing">
                          <span class="radio-inner">
                              <span class="radio-box"></span>
                              <span class="radio-text">Эксклюзивный лендинг</span>
                          </span>
                        </label>
                        <label class="radio">
                          <input type="radio" name="landing">
                          <span class="radio-inner">
                              <span class="radio-box"></span>
                              <span class="radio-text">Оптимизирован под мобильные</span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Название лендинга">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input type="text" placeholder="Ссылка редиректа">
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                      <?php include "views/components/fileUploader.php"?>
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


