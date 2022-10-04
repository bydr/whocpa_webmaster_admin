<div class="panel-filters">
    <?php include_once "forms/promoFilterForm.php" ?>
</div>

<section class="promo">
  <div class="promo__list">
      <?php for($i = 0; $i <= 5; $i++) :?>
        <div class="promo__panel panel-with_general">
          <div class="panel-inner">
            <div class="panel-general">
              <div class="panel-col">
                <div class="action action_orange" data-component="dropdown" data-placement-popup="left">
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
            </div>
            <div class="panel-block">
              <div class="panel-col">
                <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken nowrap">1699853</span></p>
                <p class="text-size_default"><b>Категория:</b><span class="text-size_medium c-gray-darken nowrap">Товарка</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Название:</b><span class="text-size_medium c-gray-darken nowrap">Промо под товар</span></p>
                <p class="text-size_default"><b>Шаблон:</b><span class="text-size_medium c-gray-darken nowrap">Название шаблона</span></p>
              </div>
              <div class="panel-col">
                <p class="text-size_default"><b>Оффер:</b><span class="text-size_medium c-gray-darken nowrap">Оффнер №654</span></p>
              </div>

            </div>
            <div class="panel-side_info">
              <div class="button_group button_group-row align-content-center">

                <div class="badge__list">
                  <div class="badge badge_private">
                    <svg class="ui-icon badge-icon">
                      <use xlink:href="img/_src/sprite.svg#lock"></use>
                    </svg>
                    <span class="text-size_small"><b>Private</b></span>
                  </div>
                </div>

                <button type="button" class="button button_accent">Редактировать</button>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
  </div>
</section>

<?php
$WITH_BUTTON_ADD = true;
$OPEN_MODAL="#modal-createPromo";
include_once "pagination.php" ?>
