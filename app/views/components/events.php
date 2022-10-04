<div class="panel-filters">
    <?php include_once "forms/eventsFilterForm.php" ?>
</div>

<section class="events">
  <div class="events__list">
    <?php for($i = 0; $i <= 5; $i++) :?>
      <div class="events__panel">
        <div class="panel-inner">
          <div class="panel-media">
            <img src="img/_src/mockImage2.png" alt="">
          </div>
          <div class="panel-content">
            <div class="panel-header panel-header_underline">
              <div class="panel-block">
                <div class="panel-col">
                  <div class="action action_orange action_placement-right" data-component="dropdown">
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
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken">1699853</span></p>
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>Название:</b><span class="text-size_medium c-gray-darken">AFFILIATE TALKS DUBAI MEEETUP</span></p>
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>Паблишер:</b><span class="text-size_medium c-gray-darken">[71301] vitaliim</span></p>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="panel-block">
                <div class="panel-col">
                  <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken nowrap">20.04.2022 - 21:20</span></p>
                </div>
                <div class="panel-col">
                  <p class="text-size_default"><b>Дата обновления:</b><span class="text-size_medium c-gray-darken nowrap">20.04.2022 - 21:20</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-side_info">
            <p class="text-size_default">
              <b>Дата события:</b>
              <span class="text-size_medium c-gray-darken nowrap">20.04.2022</span>
            </p>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</section>


<?php
$WITH_BUTTON_ADD = true;
$OPEN_MODAL="#modal-createEvent";
include_once "pagination.php" ?>

