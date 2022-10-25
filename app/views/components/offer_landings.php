<section class="offer">
    <div class="offer-header">
        <button class="button button_variant-box button_light">
            <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleLeft"></use>
            </svg>
        </button>
      <h2 class="h3 mt-5">(168629) Название до 16 с. <span class="flag"><img src="img/_src/flags/mx.svg" alt=""></span></h2>
    </div>
  <div class="offer-detail">
    <div class="panel">
      <div class="tabs" data-component="tabs">
        <div class="tabs-controls">
          <div class="tab" data-container="cont1">
            <a href="page_offer_overview.php">Обзор</a>
          </div>
          <div class="tab" data-container="cont2">
            <a href="page_offer_edit.php">Редактировать</a>
          </div>
          <div class="tab" data-container="cont3">
            <a href="page_offer_purpose.php">Цели</a>
          </div>
          <div class="tab" data-container="cont4">
            <a href="page_offer_webmasters.php">Вебмастера</a>
          </div>
          <div class="tab is-active" data-container="cont5">
            <a href="page_offer_landings.php">Лендинги</a>
          </div>
          <div class="tab" data-container="cont6">
            <a href="page_offer_leads.php">Посмотреть лиды</a>
          </div>
        </div>
        <div class="tabs-containers">
          <div class="tab-container" id="cont1">

            <div class="offers-entities">
              <div class="offers-entities__container">
                <div class="offers-entities__header">
                  <div class="offers-entities__title">
                    Список лендингов
                  </div>
                  <div class="button_group button_group-row">
                    <button class="button button_accent" data-modal="#modal-createLanding">Добавить лендинг</button>
                    <button class="button button_dark" data-modal="#modal-createPromo">Добавить промо</button>
                  </div>
                </div>
                <div class="offers-entities__list">
                    <?php for($i = 0; $i <= 6; $i++) :?>
                      <div class="panel">
                        <div class="panel-inner">
                          <div class="panel-block">
                            <div class="panel-col">
                              <div class="action action_green action_placement-right" data-component="dropdown" data-placement-popup="left">
                                <button class="action-target" data-target="">
                                  <span class="action-target__point"></span>
                                  <svg class="ui-icon action-icon">
                                    <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                                  </svg>
                                </button>
                                <div class="action-popup">
                                  <ul class="action-list">
                                    <li>
                                      <button class="action-control">Отключить</button>
                                    </li>
                                    <li>
                                      <button class="action-control" data-modal="#modal-connectWebmaster">Подключить</button>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="panel-col flex-initial">
                              <svg class="ui-icon ui-icon_20 ui-icon_accent">
                                <use xlink:href="img/_src/sprite.svg#<?=$i > 3 ? 'mobile' : ($i%2 == 0 ? 'monitorMobile' : 'monitor') ?>"></use>
                              </svg>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default">
                                <b>ID:</b><span class="text-size_medium c-gray-darken nowrap">2316311</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Название:</b><span class="text-size_medium c-gray-darken nowrap">Название ленда</span></p>
                            </div>
                            <div class="panel-col">
                              <div class="badge__list">
                                <div class="badge badge_private">
                                  <svg class="ui-icon badge-icon">
                                    <use xlink:href="img/_src/sprite.svg#lock"></use>
                                  </svg>
                                  <span class="text-size_small"><b>Private</b></span>
                                </div>
                                  <?php if ($i % 2 == 0) : ?>
                                    <div class="badge badge_accent">
                                      <svg class="ui-icon badge-icon">
                                        <use xlink:href="img/_src/sprite.svg#exclusive"></use>
                                      </svg>
                                      <span class="text-size_small"><b>Exclusive</b></span>
                                    </div>
                                  <?php endif ?>
                              </div>
                            </div>

                          </div>

                          <div class="panel-side_info">
                            <div class="button_group button_group-row">
                              <a href="#" class="button button_variant-box button_secondary" download>
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#download"></use>
                                </svg>
                              </a>
                              <button type="button" class="button button_accent">Редактировать</button>
                            </div>
                          </div>

                        </div>
                      </div>
                    <?php endfor; ?>
                </div>
              </div>

                <?php include_once "pagination.php" ?>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
