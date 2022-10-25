<div class="modal" id="modal-createEvent" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавления события</h3>
                </div>

                <form action="/" class="form">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <input id="title" type="text" placeholder="Заголовок">
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <input id="link" type="text" placeholder="Ссылка на событие">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-col">
                      <div class="form-control">
                        <div class="datepicker-container" data-component="datepicker">
                          <label class="datepicker-label">Дата напоминания:</label>
                          <input type="text" class="datepicker-input" data-input>
                        </div>
                      </div>
                    </div>
                    <div class="form-col">
                      <div class="form-control">
                        <label class="checkbox checkbox-type__check">
                          <input type="checkbox" name="checkbox">
                          <span class="checkbox-inner">
                              <span class="checkbox-box">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#check"></use>
                                </svg>
                              </span>
                              <span class="checkbox-text text-size_medium fw-normal">Показывать на сайте</span>
                          </span>
                        </label>
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


