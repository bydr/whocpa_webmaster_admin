<div class="modal" id="modal-connectWebmaster" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Подключить</h3>
                </div>

                <form action="/" class="form">
                    <div class="form-row">
                      <div class="form-col">
                        <div class="form-control">
                          <select name="purpose" class="js-choice custom-select" data-search>
                            <option value="" disabled selected>Введите id веб-мастера</option>
                            <option value="p1">ID 1</option>
                            <option value="p2">ID 2</option>
                            <option value="p3">ID 3</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="button_group button_group-row w-100 justify-center">
                            <button type="submit" class="button button_accent" >Подключить</button>
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


