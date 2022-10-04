<div class="panel-filters">
    <?php include_once "forms/toolsCheckFilterForm.php" ?>
</div>

<section class="tools">
  <div class="tools__list">
      <?php for($i = 0; $i <= 5; $i++) :?>
        <div class="tools__panel">
          <div class="panel-inner">
            <div class="panel-block">
              <div class="panel-col flex-initial">
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
                <p class="text-size_default"><b>Название оффера:</b><span class="text-size_medium c-gray-darken nowrap">Название оффер</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Тип проверки:</b><span class="text-size_medium c-gray-darken nowrap">Быстрый</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Дата проверки:</b><span class="text-size_medium c-gray-darken nowrap">23.05.2022</span></p>
              </div>
              <div class="panel-col">
                <div class="text-size_default d-flex align-content-center">
                  <b>Дополнительно:</b>
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
              <button type="button" class="button button_link c-accent">Удалить</button>
            </div>
          </div>
        </div>
      <?php endfor; ?>
  </div>
</section>


<?php
include_once "pagination.php" ?>
