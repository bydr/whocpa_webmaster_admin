<form class="form form_view-row" action="#">
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <input type="text" placeholder="ID пользователя">
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <select name="traffic" id="traffic" class="js-choice custom-select">
          <option value="" disabled selected>Тип баланса</option>
          <option value="traffic1">Трафик 1</option>
          <option value="traffic2">Трафик 2</option>
          <option value="traffic3">Трафик 3</option>
          <option value="traffic4">Трафик 4</option>
        </select>
      </div>
    </div>
    <div class="form-col flex-initial">
      <div class="form-control">
        <select name="traffic" id="traffic" class="js-choice custom-select">
          <option value="" disabled selected>Валюта</option>
          <option value="traffic1">Валюта 1</option>
          <option value="traffic2">Валюта 2</option>
          <option value="traffic3">Валюта 3</option>
          <option value="traffic4">Валюта 4</option>
        </select>
      </div>
    </div>
    <div class="form-col flex-initial">
      <div class="form-control">
        <input type="text" placeholder="Сумма пополнения">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <textarea class="textarea-element" name="comment" placeholder="Комментарий"></textarea>
      </div>
    </div>
    <div class="form-col flex-initial">
      <div class="button_group button_group-row w-100 justify-center">
        <button class="button button_accent">Пополнить</button>
      </div>
    </div>
  </div>
</form>
