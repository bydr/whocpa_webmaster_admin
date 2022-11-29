<div class="panel-filters">
  <?php include_once "forms/usersFilterForm.php" ?>
</div>

<section class="users">
  <div class="users__list">
      <?php for($i=0;$i<=10;$i++): ?>
        <div class="users__panel">
          <div class="panel-inner">
            <div class="panel-row">
              <div class="panel-block">
                <div class="panel-col">
                  <div class="dropdown dropdown__bordered dropdown__small" data-component="dropdown">
                    <button class="dropdown-target" data-target>
                      <span>T</span>
                      <svg class="ui-icon dropdown-icon">
                        <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                      </svg>
                    </button>
                    <div class="dropdown-popup">
                      <ul class="dropdown-list">
                        <li>
                          <span>Гэмблинг</span>
                        </li>
                        <li>
                          <span>Нутра</span>
                        </li>
                        <li>
                          <span>Товарка</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="dropdown dropdown__bordered dropdown__small" data-component="dropdown">
                    <button class="dropdown-target" data-target>
                      <span>T</span>
                      <svg class="ui-icon dropdown-icon">
                        <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                      </svg>
                    </button>
                    <div class="dropdown-popup">
                      <ul class="dropdown-list">
                        <li>
                          <span>Гэмблинг</span>
                        </li>
                        <li>
                          <span>Нутра</span>
                        </li>
                        <li>
                          <span>Товарка</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-block">
                <div class="panel-col">
                  <div class="action action_orange" data-component="dropdown">
                    <button class="action-target" data-target>
                      <span class="action-target__point"></span>
                      <svg class="ui-icon action-icon">
                        <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                      </svg>
                    </button>
                    <div class="action-popup">
                      <ul class="action-list">
                        <li>
                          <button class="action-control" data-modal="#modal-passwordReset">Сбросить пароль</button>
                        </li>
                        <li>
                          <button class="action-control" data-modal="#modal-activateAccount">Активировать</button>
                        </li>
                        <li>
                          <button class="action-control">Деактивировать</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel-col">
                  <a href="#" class="link c-gray-darken panel-id"><b>2464876</b></a>
                  <a href="#" class="link c-gray-darken"><b>alansoyer_kollapse_req321</b></a>
                  <p>15896334</p>
                </div>
                <div class="panel-col">
                  <ul class="socs">
                    <li>
                      <a href="#">
                        <svg class="ui-icon">
                          <use xlink:href="img/_src/sprite.svg#telegram"></use>
                        </svg>
                        <span>
                                            @kostylev23
                                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="ui-icon">
                          <use xlink:href="img/_src/sprite.svg#skype"></use>
                        </svg>
                        <span>
                                            live:kostylev23
                                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:alansoyer_kolps@gmail.com">
                        <svg class="ui-icon">
                          <use xlink:href="img/_src/sprite.svg#mail"></use>
                        </svg>
                        <span>
                                            alansoyer_kolps@gmail.com
                                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="panel-col flex-1">
                  <p class="stats-price"><span class="c-dark">Доступно:</span><span class="price c-accent"> 999 999$</span></p>
                  <p class="stats-price"><span class="c-dark">Холд:</span><span class="price c-secondary"> 999 999$</span></p>
                  <p class="stats-price"><span class="c-dark">Кредит:</span><span class="price c-gray-darken"> -999 999$</span></p>
                </div>
              </div>
              <div class="panel-block">
                <div class="last-notice">
                  <div class="last-notice__header">
                    <p><span class="c-dark">ID: </span>6548952</p>
                    <p class="c-dark">Последняя заметка:</p>
                  </div>
                  <div class="last-notice__body">
                    <p>Задача организации, в особенности же дальнейшее развитие различных форм деятельности в гарантия</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>

  </div>
</section>

<?php
$WITH_BUTTON_ADD = true;
$OPEN_MODAL = "#modal-thanks";
include_once "pagination.php" ?>
