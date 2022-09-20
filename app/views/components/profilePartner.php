<?php
$partnerData = [
    "id" => [
      "title" => "ID",
      "value" => "1699853"
    ],
    "login" => [
        "title" => "Логин",
        "value" => "positivelight"
    ],
    "level" => [
        "title" => "Уровень",
        "value" => "23"
    ],
    "hash" => [
        "title" => "Hash",
        "value" => "954599881"
    ],
    "aff_id" => [
        "title" => "aff_id",
        "value" => "53368715"
    ],
    "api" => [
        "title" => "API",
        "value" => "5fd3q368jgf7d1acv5vxcv41da5da",
        "isCopied" => true
    ],
    "manager" => [
        "title" => "Менеджер",
        "value" => "nickstore",
    ],
    "managersocs" => [
        "skype" => [
            "title" => "",
            "value" => "live:nickstore_box3",
            "link" => "live:nickstore_box3",
        ],
        "telegram"=> [
            "title" => "",
            "value" => "@nickstore",
            "link" => "@nickstore",
        ]
    ],
    "trustLvl" => [
        "title" => "Ур.доверия",
        "value" => "VIP",
        "isAccent" => true
    ],
];

?>

<section class="profile">
  <div class="profile-controls">
  <div class="profile-status">
    <div class="action action_green">
      <div class="action-target">
        <div class="action-target__point"></div>
      </div>
    </div>
    <p class="text-size_default"><b>Активный</b></p>
  </div>
  <div class="button_group button_group-row">
    <div class="button button_dark">Тикеты</div>
    <div class="button button_secondary">Статистика</div>
    <div class="button button_accent">Авторизация</div>
  </div>
</div>
  <div class="profile-panel">
    <div class="profile-info">
      <div class="profile-info__list">
        <?php foreach($partnerData as $key => $item): ?>
          <div class="profile-info__item <?=$key === "managersocs" ? "is-clean" : "" ?>">
              <?php if(strlen($item["title"]) > 0) :?>
                <div class="title"><span><?=$item["title"]?>:</span></div>
              <?php endif;?>
            <div class="value <?=$item["isAccent"] ? 'c-accent' : ""?>">
                <?php if($item["isCopied"]) :?>
                  <div data-component="copy" data-content="kostylev92@gmail.com">
                    <span class="paragraph_14 c-gray-darken">kostylev92@gmail.com</span>
                    <svg class="ui-icon">
                      <use xlink:href="img/_src/sprite.svg#copy"></use>
                    </svg>
                  </div>
                <?php else: ?>
                    <?php if($key === "managersocs") :?>
                      <div class="socs__list">
                          <?php foreach($item as $k => $i): ?>
                            <div class="socs__item">
                              <a href="<?=$i["link"] ?>">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#<?=$k ?>"></use>
                                </svg>
                                <?=$i["value"] ?>
                              </a>
                            </div>
                          <?php endforeach; ?>
                      </div>
                    <?php else: ?>
                      <span><?=$item["value"]?></span>
                    <?php endif;?>
                <?php endif;?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="profile-info__total">
        <p class="title">Баланс:</p>
        <p><span >Доступно:</span><span class="c-accent price">11 999,62$</span></p>
        <p><span >Холд:</span><span class="c-secondary price">3 146,73$</span></p>
        <p><span >Кредит:</span><span class="c-gray-darken price">-351,12$</span></p>
        <button class="button button_accent" data-modal="#modal-editProfile">Редактировать</button>
      </div>
    </div>
    <div class="profile-payload">
      <div class="profile-filters">

        <section class="pagination pagination_bordered">
          <div class="pagination-bar">
            <button class="pagination-nav pagination-nav__prev">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
              </svg>
            </button>
            <div class="pagination-pages">
              <button class="pagination-page is-active">01</button>
              <button class="pagination-page">02</button>
              <button class="pagination-page">04</button>
              <button class="pagination-page">...</button>
              <button class="pagination-page">14</button>
            </div>
            <button class="pagination-nav pagination-nav__next">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
              </svg>
            </button>
          </div>
        </section>

        <form action="/" class="form form_view-row">
          <div class="form-control">
            <select name="status" id="status" class="js-choice custom-select">
              <option value="" disabled selected>Статус</option>
              <option value="status1">Статус 1</option>
              <option value="status2">Статус 2</option>
              <option value="status3">Статус 3</option>
            </select>
          </div>
          <div class="form-control">
            <label class="checkbox checkbox-type__radio checkbox_bordered">
              <input type="checkbox" name="checkbox" onchange="toggleHandle(this.checked)">
              <span class="checkbox-inner">
                  <span class="checkbox-text">Офферы</span>
                  <span class="checkbox-box"></span>
                  <span class="checkbox-text">Выплаты</span>
              </span>
            </label>
          </div>
          <div class="tooltip">
            <button type="button" class="tooltip-button"
                    data-tippy-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, temporibus?">
              <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#tooltip"></use>
              </svg>
            </button>
          </div>
        </form>
      </div>
      <div class="profile-payload__list">
        <?php include_once "profileOffers.php" ?>
        <?php include_once "profilePayouts.php" ?>
      </div>
    </div>
  </div>

  <div class="panel-group">
    <?php include_once "tagsTraffic.php" ?>

    <?php include_once "tagsVertical.php" ?>
  </div>

  <div class="panel-stats panel_compare_leads">
    <div class="panel-inner">
      <div class="panel-header panel-header_underline">
        <p class="text-size_default"><b>Статистика за неделю</b></p>
      </div>
      <div class="panel-body">
        <div class="chart chart_line chart_week">
            <div class="chart-wrapper">
              <div class="chart-config">
                <div data-set>
                  <input type="text" name="label1" data-label value="Текущая">
                  <select name="values1" data-values>
                    <option value="2200"></option>
                    <option value="2400"></option>
                    <option value="2800"></option>
                    <option value="2600"></option>
                    <option value="3200"></option>
                  </select>
                </div>
                <div data-set>
                  <input type="text" name="label2" data-label value="Прошлая">
                  <select name="values2" data-values>
                    <option value="3200"></option>
                    <option value="1400"></option>
                    <option value="1800"></option>
                    <option value="3000"></option>
                    <option value="2250"></option>
                    <option value="2490"></option>
                    <option value="3500"></option>
                  </select>
                </div>
                <select name="labels">
                  <option value="Понедельник"></option>
                  <option value="Вторник"></option>
                  <option value="Среда"></option>
                  <option value="Четверг"></option>
                  <option value="Пятница"></option>
                  <option value="Суббота"></option>
                  <option value="Воскресенье"></option>
                </select>
              </div>
              <canvas id="chart-line"></canvas>
            </div>
            <div class="chart-legend" id="chart-line-legend"></div>
          </div>
      </div>
    </div>
  </div>
</section>

<script>
  const toggleHandle = (checked) => {
    document.querySelector(".profile-offer__list").style.display = checked ? "none" : "block"
    document.querySelector(".profile-payout__list").style.display = checked ? "block" : "none"
  }
</script>
