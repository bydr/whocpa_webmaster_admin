<form action="/" class="form">
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <label for="login">ID:</label>
        <input id="login" type="text" placeholder="ID" value="positivelight">
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <label for="login">Паблишер:</label>
        <input id="login" type="text" placeholder="Паблишер" value="positivelight">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <label for="login">Название источника:</label>
        <input id="login" type="text" placeholder="Название источника" value="Facebook">
      </div>
    </div>
    <div class="form-col">
      <div class="form-control">
        <label for="manager">Тип трафика:</label>
        <select name="traffic" id="traffic" class="custom-select" >
          <option value="" disabled selected>Трафик</option>
          <option value="manager1">Трафик 1</option>
          <option value="manager2">Трафик 2</option>
          <option value="manager3">Трафик 3</option>
          <option value="manager4">Трафик 4</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <label for="manager">Категория:</label>
        <select name="traffic" id="traffic" class="custom-select" multiple>
          <option value="" disabled selected>-</option>
          <option value="manager1">Категория 1</option>
          <option value="manager2">Категория 2</option>
          <option value="manager3">Категория 3</option>
          <option value="manager4">Категория 4</option>
        </select>
      </div>
    </div>
    <div class="form-col">

      <div class="form-control">
        <label for="status">Статус:</label>
        <select name="status" id="status" class="js-choice custom-select">
          <option value="" disabled selected>Статус</option>
          <option value="status1">Статус 1</option>
          <option value="status2">Статус 2</option>
          <option value="status3">Статус 3</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-col">
      <div class="form-control">
        <label for="status">Комментарий:</label>
        <textarea class="textarea-element" name="message" placeholder="Объяснение примерно в 50 символов печатного текста"></textarea>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="button_group button_group-row w-100 justify-center">
      <button class="button button_accent">Одобрить</button>
      <button class="button button_secondary">Редактировать</button>
      <button class="button button_dark" data-modal-hide>Отмена</button>
    </div>
  </div>
</form>
