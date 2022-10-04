<div class="modal" id="modal-createTaskLead" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Создать задачу</h3>
                </div>

                <form action="/" class="form">
                  <p class="text-size_default"><b>
                      Для всех лидов с выбранными фильтрами будет создана следующая задача:
                    </b></p>
                    <div class="form-group">
                        <div class="form-control form-control_view-col is-error">
                            <select name="leadUser" id="leadUser" class="js-choice custom-select"
                                    data-search multiple>
                                <option value="" disabled selected>Подтвердить лиды для паблишера</option>
                                <option value="leadUser1">Лид 1</option>
                                <option value="leadUser2">Лид 2</option>
                                <option value="leadUser3">Лид 3</option>
                            </select>
                            <p class="message-error">Пример ошибки поля</p>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="button_group button_group-row w-100 justify-center">
                        <button type="submit" class="button button_accent" >Создать</button>
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


