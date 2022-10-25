<div class="modal" id="modal-createNewsSystem" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавление системной новости</h3>
                </div>
            </div>

          <form action="/" class="form">
            <div class="form-row">
              <div class="form-control">
                <input id="title" type="text" placeholder="Заголовок">
              </div>
            </div>

            <div class="form-row">
              <div class="form-control">
                <textarea class="textarea-element" name="message" placeholder="Сообщение"></textarea>
              </div>
            </div>

            <div class="form-row">
                <?php include "views/components/fileUploader.php"?>

            </div>

            <br>

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
                              <span class="checkbox-text text-size_medium fw-normal">Обязательная к прочтению новость</span>
                          </span>
                </label>
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

