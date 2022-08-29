<div class="modal" id="modal-thanks" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Добавить партнёра</h3>
                </div>

                <form action="/" class="form">
                    <div class="form-group form-group_row">
                        <div class="form-control">
                            <input name="login" type="text" placeholder="Логин">
                        </div>
                        <div class="form-control">
                            <input name="email" type="text" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group form-group_row">
                        <div class="form-control is-error">
                            <select name="typeUser" id="typeUser" class="js-choice custom-select"
                                    data-searchenabled>
                                <option value="" disabled selected>Тип</option>
                                <option value="typeUser1">Тип 1</option>
                                <option value="typeUser2">Тип 2</option>
                                <option value="typeUser3">Тип 3</option>
                            </select>
                            <p class="message-error">Пример ошибки поля</p>
                        </div>
                        <div class="form-control is-error">
                            <input name="manager" type="text" placeholder="Назначить менеджера">
                            <p class="message-error">Пример ошибки поля</p>

                        </div>
                    </div>
                    <div class="form-group justify-center text-center">
                        <button type="button" class="button button_accent" data-modal="#modal-passwordSend">Добавить</button>
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


