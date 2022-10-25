<div class="panel-filters">
    <?php include_once "forms/offersFilterForm.php" ?>
</div>

<div class="offers-controls">
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
    <button class="button button_link" data-component="copy" disabled>Отключить</button>
    <button class="button button_link" disabled>Запустить</button>
    <button class="button button_accent" >Выгрузка</button>
    <button class="button button_dark" >Добавить новый</button>
  </div>
    <?php include "pagination.php" ?>
</div>

<section class="offers">
    <div class="offers__list">
        <?php for($i = 0; $i <= 5; $i++) :?>
          <div class="offers__panel panel-with_general">
            <div class="panel-inner">
              <div class="panel-general">
                <div class="action action_orange mb-10" data-component="dropdown" data-placement-popup="left">
                  <button class="action-target" data-target="">
                    <span class="action-target__point"></span>
                    <svg class="ui-icon action-icon">
                      <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                    </svg>
                  </button>
                  <div class="action-popup">
                    <ul class="action-list">
                      <li>
                        <button class="action-control">Редактировать</button>
                      </li>
                      <li>
                        <button class="action-control">Посмотреть цели</button>
                      </li>
                      <li>
                        <button class="action-control">Отправить на интеграцию</button>
                      </li>
                      <li>
                        <button class="action-control">Добавить цель</button>
                      </li>
                      <li>
                        <button class="action-control">Копировать оффер</button>
                      </li>
                    </ul>
                  </div>
                </div>
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
              <div class="panel-block">
                <div class="panel-col">
                  <div class="d-flex">
                    <div class="flag">
                      <img src="img/_src/flags/mx.svg" alt="">
                    </div>
                    <p class="text-size_default"><b>ID:</b>
                      <a href="#" class="link c-gray-darken link_decoration text-size_medium"><b>1699853</b></a>
                    </p>
                  </div>
                  <p class="text-size_default"><b>CPA:</b><span class="text-size_medium c-gray-darken nowrap">(10$/8$)</span></p>
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>Название:</b><span class="text-size_medium c-gray-darken">Название до 16 с.</span></p>
                  <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken">20.04.2022</span></p>
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>Рекламодатель:</b>
                    <span class="text-size_medium c-gray-darken nowrap">billingcat48</span></p>
                  <div class="text-size_default d-flex align-content-center">
                    <b>Комментарий:</b>
                    <div class="tooltip">
                      <button type="button" class="tooltip-button tooltip-button_gray-darken"
                              data-tippy-theme="light"
                              data-tippy-content="Pellentesque quis auctor nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum dignissim nibh justo, id luctus nisi tempus non.">
                        <svg class="ui-icon">
                          <use xlink:href="img/_src/sprite.svg#tooltipFill"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

              </div>
              <div class="panel-side_info">
                <div class="button_group button_group-row align-content-center">

                  <div class="badge__list">
                    <div class="badge badge_top">
                      <svg class="ui-icon badge-icon">
                        <use xlink:href="img/_src/sprite.svg#crown"></use>
                      </svg>
                      <span class="text-size_small"><b>TOP</b></span>
                    </div>
                    <div class="badge badge_private">
                      <svg class="ui-icon badge-icon">
                        <use xlink:href="img/_src/sprite.svg#lock"></use>
                      </svg>
                      <span class="text-size_small"><b>Private</b></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
    </div>
</section>
