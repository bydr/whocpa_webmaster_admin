<section class="offer">
    <div class="offer-header">
        <button class="button button_variant-box button_light">
            <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleLeft"></use>
            </svg>
        </button>
      <h2 class="h3 mt-5">(168629) Название до 16 с. <span class="flag"><img src="img/_src/flags/mx.svg" alt=""></span></h2>
      <div class="offer-header__side">
        <button class="button button_accent" data-modal="#modal-connectWebmaster">Подключить</button>
      </div>
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
          <div class="tab is-active" data-container="cont4">
            <a href="page_offer_webmasters.php">Вебмастера</a>
          </div>
          <div class="tab" data-container="cont5">
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
                <div class="offers-entities__list">
                    <?php for($i = 0; $i <= 5; $i++) :?>
                      <div class="panel">
                        <div class="panel-inner">
                          <div class="panel-block">
                            <div class="panel-col">
                              <div class="action action_orange action_placement-right" data-component="dropdown" data-placement-popup="left">
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
                            <div class="panel-col">
                              <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken nowrap">2316311</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Холд:</b><span class="text-size_medium c-gray-darken nowrap">4</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Ставка нам:</b><span class="text-size_medium c-gray-darken nowrap">3650$</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Ставка вебмастеру:</b><span class="text-size_medium c-gray-darken nowrap">3650$</span></p>
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
