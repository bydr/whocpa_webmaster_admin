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
          <div class="tab is-active" data-container="cont3">
            <a href="page_offer_purpose.php">Цели</a>
          </div>
          <div class="tab" data-container="cont4">
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
                <div class="offers-entities__header">
                  <div class="offers-entities__title">
                    Цели
                  </div>
                  <button class="button button_accent" data-modal="#modal-createPurpose">Добавить цель</button>
                </div>
                <div class="offers-entities__list">
                    <?php for($i = 0; $i <= 5; $i++) :?>
                      <div class="panel">
                        <div class="panel-inner">
                          <div class="panel-block">
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
                                      <button class="action-control">Редактировать</button>
                                    </li>
                                    <li>
                                      <button class="action-control">Удалить</button>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken nowrap">1699853</span></p>
                              <p class="text-size_default"><b>Холд:</b><span class="text-size_medium c-gray-darken nowrap">4</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Оплата:</b><span class="text-size_medium c-gray-darken nowrap">Оплачено</span></p>
                              <p class="text-size_default"><b>Цель:</b><span class="text-size_medium c-gray-darken nowrap">Краткое описание будет тут</span></p>
                            </div>
                            <div class="panel-col">
                              <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken nowrap">23.05.2022</span></p>
                              <p class="text-size_default"><b>Дата редактирования:</b><span class="text-size_medium c-gray-darken nowrap">23.05.2022</span></p>
                            </div>
                          </div>
                          <div class="panel-side_info">
                            <p class="text-size_medium">Паб.: <span class="price c-accent">9 999,62$</span></p>
                          </div>
                        </div>
                      </div>
                    <?php endfor; ?>
                </div>
              </div>

              <div class="offers-entities__container">
                <div class="offers-entities__header">
                  <div class="offers-entities__title">
                    Спец. условия
                  </div>
                  <button class="button button_accent" data-modal="#modal-createSpecialCondition">Добавить спец. условие</button>
                </div>

                <div class="offers-entities__list">
                    <?php include_once "offers_spec_conditions_list.php"?>
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

<script>
  const buttons3 = [...document.querySelectorAll(`[data-component="toggleButton"]`)]
  for (const btn of buttons3) {
    btn.addEventListener("click", (e) => {
      e.preventDefault()
      const panel = btn.closest(".panel")

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
