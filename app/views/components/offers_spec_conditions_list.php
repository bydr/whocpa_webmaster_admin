<?php for($i = 0; $i <= 5; $i++) :?>
  <div class="panel panel-with_general">
    <div class="panel-inner">
      <div class="panel-general">
        <div class="panel-col">
          <div class="action action_green" data-component="dropdown" data-placement-popup="left">
            <button class="action-target" data-target="">
              <span class="action-target__point"></span>
              <svg class="ui-icon action-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
              </svg>
            </button>
            <div class="action-popup">
              <ul class="action-list">
                <li>
                  <button class="action-control" data-modal="#modal-editSpecialCondition">Редактировать</button>
                </li>
                <li>
                  <button class="action-control">Удалить</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-block">
        <div class="panel-col">
          <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken nowrap">1699853</span></p>
          <p class="text-size_default"><b>Холд:</b><span class="text-size_medium c-gray-darken nowrap">4</span></p>
        </div>
        <div class="panel-col">
          <p class="text-size_default"><b>Паблишер:</b><span class="text-size_medium c-gray-darken nowrap">holyjoker3</span></p>
          <p class="text-size_default"><b>Тип ставки:</b><span class="text-size_medium c-gray-darken nowrap">CPA(10$/8$)</span></p>
        </div>
        <div class="panel-col">
          <p class="text-size_default"><b>Оффер:</b><span class="text-size_medium c-gray-darken nowrap">Оффер номер 1</span></p>
          <p class="text-size_default"><b>Цель:</b><span class="text-size_medium c-gray-darken nowrap">Approved Lead</span></p>
        </div>
        <div class="panel-col">
          <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken nowrap">23.05.2022</span></p>
          <p class="text-size_default"><b>Дата редактирования:</b><span class="text-size_medium c-gray-darken nowrap">23.05.2022</span></p>
        </div>
        <div class="panel-col">
          <p class="text-size_default"><b>Creative:</b><span class="text-size_medium c-gray-darken nowrap">Пример</span></p>
          <p class="text-size_default"><b>Source:</b><span class="text-size_medium c-gray-darken nowrap">Пример</span></p>
        </div>
      </div>
      <div class="panel-side_info">
        <div class="panel-col">
          <p class="text-size_medium">Ставка паб.:<span class="price c-accent">9 999,62$</span></p>
          <p class="text-size_medium">Ставка паб.:<span class="price c-secondary">9 999,62$</span></p>
          <button class="button button_link js-button_toggle c-accent" data-component="toggleButton" data-toggle-text="Скрыть">Расширить</button>
        </div>
      </div>
    </div>
    <div class="panel-detail panel-detail__reset">
      <div class="panel-row">
        <div class="panel-block">
          <div class="panel-col">
            <p class="text-size_default"><b>Ставка для паблишера:</b><span class="text-size_medium c-gray-darken nowrap">33$ <span class="text-size_medium c-gray-darken">(30$)</span></span></p>
            <p class="text-size_default"><b>Ставка для адверта:</b><span class="text-size_medium c-gray-darken nowrap">33$ <span class="text-size_medium c-gray-darken">(30$)</span></span></p>
          </div>
          <div class="panel-col">
            <p class="text-size_default"><b>Холд дней:</b><span class="text-size_medium c-gray-darken nowrap">1 <span class="text-size_medium c-gray-darken">(3)</span></span></p>
            <p class="text-size_default"><b>Описание ставки паблишера(динамическая цель):</b><span class="text-size_medium c-gray-darken nowrap">Пример</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endfor; ?>
