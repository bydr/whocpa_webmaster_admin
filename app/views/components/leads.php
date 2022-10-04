<div class="panel-filters">
    <?php include_once "forms/leadsFilterForm.php" ?>
</div>

<div class="leads-controls">
  <div class="button_group-row">
    <div class="checkbox-wrapper">
      <label class="checkbox checkbox-type__check">
        <input type="checkbox" name="checkbox">
        <span class="checkbox-inner">
            <span class="checkbox-box">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#check"></use>
              </svg>
            </span>
        </span>
      </label>
    </div>
    <button class="button button_link" disabled>На проверку</button>
    <button class="button button_link" disabled>Подтвердить</button>
    <button class="button button_link" disabled>Отклонить</button>
    <button class="button button_link" disabled>Спам</button>
  </div>
    <div class="button_group-row justify-end">
      <div class="button_group button_group-row">
        <button class="button button_accent" type="button" data-modal="#modal-createTaskLead">Создать задачу</button>
        <button class="button button_dark" type="button">Закрыть лиды</button>
        <button class="button button_secondary" type="button">Открыть лиды для адверта</button>
      </div>
    </div>
</div>

<section class="leads">
  <div class="leads__list">
    <?php for($i = 0; $i <= 8; $i++) :?>
      <div class="leads__panel panel-with_general">
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
                    <button class="action-control">Информация</button>
                  </li>
                  <li>
                    <button class="action-control">Подтвердить</button>
                  </li>
                  <li>
                    <button class="action-control">Отменить</button>
                  </li>
                </ul>
              </div>
            </div>
            <br>
            <label class="checkbox checkbox-type__check">
              <input type="checkbox" name="checkbox">
              <span class="checkbox-inner">
                <span class="checkbox-box">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#check"></use>
                  </svg>
                </span>
            </span>
            </label>
          </div>
          <div class="panel-header panel-header_underline">
            <div class="panel-block">
              <div class="panel-col">
                <p class="text-size_default"><b>ID:</b><span class="text-size_medium">1699853</span></p>
                <p class="text-size_default"><b>TID:</b><span class="text-size_medium">4005389</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Оффер:</b><span class="text-size_medium">[6029] Maximizer[TH]</span></p>
                <p class="text-size_default"><b>Источник:</b><span class="text-size_medium">FB</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Адверт:</b><span class="text-size_medium">[71301] WhoCPA</span></p>
                <p class="text-size_default"><b>CR_id:</b><span class="text-size_medium">2316311</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Паблишер:</b><span class="text-size_medium">[71301] vitaliim</span></p>
                <p class="text-size_default"><b>click_id:</b><span class="text-size_medium">e3c9b7vxlh9gmae7</span></p>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="panel-block">
              <div class="panel-col">
                <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken nowrap">20.04.2022 - 21:20</span></p>
                <p class="text-size_default"><b>Дата редиректа:</b><span class="text-size_medium c-gray-darken nowrap">20.04.2022 - 21:20</span></p>
                <p class="text-size_default"><b>Дата закрытия:</b><span class="text-size_medium c-gray-darken nowrap">20.04.2022 - 21:20</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Телефон:</b><span class="text-size_medium c-gray-darken">6681***909</span></p>
                <p class="text-size_default"><b>Холд:</b><span class="text-size_medium c-gray-darken">4</span></p>
                <p class="stats-price"><span class="c-dark">Паб.:</span><span class="price c-accent"> 9 999,62$</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Имя:</b><span class="text-size_medium c-gray-darken">Имя человека(20сим.)</span></p>
                <p class="text-size_default"><b>Подробности:</b><span class="text-size_medium c-gray-darken">Задача организации, в особенности же рамки и место кадров собственно</span></p>
                <p class="stats-price"><span class="c-dark">Реф.:</span><span class="price c-secondary"> 999 999,62$</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Цель:</b><span class="text-size_medium c-gray-darken">[4863] Approved Lead</span></p>
                <p class="stats-price"><span class="c-dark">Наши.:</span><span class="price c-secondary"> 999 999,62$</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</section>


<?php
$WITH_PER_PAGE = true;
include_once "pagination.php" ?>

