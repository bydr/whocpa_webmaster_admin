<div class="panel-filters">
    <?php include_once "forms/financeFilterForm.php" ?>
</div>

<div class="finance-controls">
    <div class="button_group-row">
      <button class="button button_link" data-component="copy" disabled>Копировать</button>
      <button class="button button_link" disabled>Закрыть отмеченное</button>
      <button class="button button_link" disabled>Отменить отмеченное</button>
    </div>
    <?php include "pagination.php" ?>
</div>

<section class="finance">
  <div class="finance__list">
    <?php for($i=0;$i<=10;$i++): ?>
      <div class="finance__panel panel-with_general">
        <div class="panel-inner">
          <div class="panel-general">
            <div class="action action_green" data-component="dropdown">
              <button class="action-target" data-target="">
                <span class="action-target__point"></span>
                <svg class="ui-icon action-icon">
                  <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                </svg>
              </button>
              <div class="action-popup">
                <ul class="action-list">
                  <li>
                    <button class="action-control" data-modal="#modal-changeStatusOffer">Подтвердить</button>
                  </li>
                  <li>
                    <button class="action-control" data-modal="#modal-actionFinance">Отклонить</button>
                  </li>
                </ul>
              </div>
            </div>

            <br>

            <label class="checkbox checkbox-type__check" disabled>
              <input type="checkbox" name="checkbox" disabled>
              <span class="checkbox-inner">
                <span class="checkbox-box">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#check"></use>
                  </svg>
                </span>
            </span>
            </label>
          </div>
          <div class="panel-header">
            <div class="panel-row">
              <div class="panel-block">
                <p class="text-size_default"><b>ID:</b><span class="text-size_medium">1699853</span></p>
                <p class="text-size_default" data-component="copy" data-content="positivelight"><b>Менеджер:</b><span class="text-size_medium link_decoration">positivelight</span></p>
                <p class="text-size_default"><b>Паблишер:</b><span class="text-size_medium">1699853 - positivelight </span></p>
                <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium">01/02/2022</span></p>
                <p class="text-size_default"><b>Дата закрытия:</b><span class="text-size_medium">01/02/2022</span></p>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="panel-row">
              <div class="panel-block">
                <p class="stats-price"><span class="c-dark">Активные:</span><span class="price c-accent"> 9 999,62$</span></p>
                <p class="stats-price"><span class="c-dark">Всего:</span><span class="price c-secondary"> 3 146,73$</span></p>
                <p class="stats-price"><span class="c-dark">Кредитные:</span><span class="price c-gray-darken"> -351,12$</span></p>
              </div>
              <div class="panel-block">
                <p class="stats-price" data-component="copy" data-content="5168 4421 3369 4343"><span class="c-dark">Карта:</span><span class="price c-gray-darken link_decoration">5168 4421 3369 4343</span></p>
                <p class="stats-price"><span>Платежная система:</span>
                  <svg class="ui-icon wallet-logo">
                    <use xlink:href="img/_src/sprite.svg#visa"></use>
                  </svg>
                </p>
              </div>
            </div>
            <br>
            <div class="panel-row">
              <div class="panel-col">
                <button class="button button_link js-button_toggle <?=$i <= 3 ? 'c-accent' : '' ?>" data-component="toggleButton" data-toggle-text="Скрыть">Расширить</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-detail">
          <div class="panel-row">
            <div class="panel-block">
              <p class="text-size_default mb-0">Комментарий паблишера:</p>
              <p class="text-size_medium c-gray-darken">Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации.</p>
            </div>
            <div class="panel-block">
              <p class="text-size_default mb-0">Комментарий менеджера:</p>
              <p class="text-size_medium c-gray-darken">Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации.</p>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</section>

<div class="finance-controls">
  <div class="button_group-row">
    <button class="button button_link" data-component="copy" disabled>Копировать</button>
    <button class="button button_link" disabled>Закрыть отмеченное</button>
    <button class="button button_link" disabled>Отменить отмеченное</button>
  </div>
    <?php include "pagination.php" ?>
</div>

<script>
  const buttons = [...document.querySelectorAll(`[data-component="toggleButton"]`)]
  for (const btn of buttons) {
    btn.addEventListener("click", (e) => {
      e.preventDefault()
      const panel = btn.closest(".finance__panel")

      window.whocpa.toggleButton.toggle(btn, {
        cbActive: () => {
          panel.classList.add("is-toggled")
        },
        cbDisable: () => {
          panel.classList.remove("is-toggled")
        }
      })
    })
  }

</script>
