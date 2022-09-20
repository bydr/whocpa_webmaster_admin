
<?php

$folders = [
    [
        "color" => "green",
        "number" => 71,
        "name" => "Актуально"
    ],
    [
        "color" => "orange",
        "number" => 71,
        "name" => "В ожидании"
    ],
    [
        "color" => "blue",
        "number" => 71,
        "name" => "Партнёрская сеть"
    ],
    [
        "color" => "orange-darken",
        "number" => 71,
        "name" => "Заблокировано"
    ],
    [
        "color" => "red-lighten",
        "number" => 71,
        "name" => "Не актуально"
    ],
    [
        "color" => "blue",
        "number" => 71,
        "name" => "Партнёрская сеть"
    ],
    [
        "color" => "orange-darken",
        "number" => 71,
        "name" => "Заблокировано"
    ],
    [
        "color" => "red-lighten",
        "number" => 71,
        "name" => "Не актуально"
    ]
];

$dialogs= [
    [
        "id" => "2568741",
        "color" => "green"
    ],
    [
        "id" => "2568741",
        "color" => "green"
    ],
    [
        "id" => "1468632",
        "color" => "green"
    ],
    [
        "id" => "5876314",
        "color" => "orange"
    ],
    [
        "id" => "3157236",
        "color" => "red-lighten"
    ],
    [
        "id" => "2568741",
        "color" => "orange"
    ],
    [
        "id" => "2568741",
        "color" => "red-lighten"
    ],
    [
        "id" => "2568741",
        "color" => "green"
    ],
    [
        "id" => "2568741",
        "color" => "orange"
    ],
    [
        "id" => "2568741",
        "color" => "red-lighten"
    ],
    [
        "id" => "2568741",
        "color" => "green"
    ],
    [
        "id" => "2568741",
        "color" => "orange"
    ],
    [
        "id" => "2568741",
        "color" => "red-lighten"
    ],
    [
        "id" => "2568741",
        "color" => "green"
    ],
    [
        "id" => "2568741",
        "color" => "orange"
    ],
    [
        "id" => "2568741",
        "color" => "red-lighten"
    ],
    [
        "id" => "2568741",
        "color" => "green"
    ],
];

$payload = [
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
]

?>


<section class="crm">

  <div class="panel-filters">
      <?php include_once "forms/crmFilterForm.php" ?>
  </div>

  <div class="crm-panel">
    <div class="messenger">
      <div class="messenger-tabs messenger-tabs__responsive">
        <div id="folders" class="tab is-active">
          <button class="button">
            <svg class="ui-icon ">
              <use xlink:href="img/_src/sprite.svg#folder"></use>
            </svg>
            <span>Вкладки</span>
          </button>
        </div>
        <div id="dialogs" class="tab">
          <button class="button">
            <svg class="ui-icon ">
              <use xlink:href="img/_src/sprite.svg#edit"></use>
            </svg>
            <span>Диалоги</span>
          </button>
        </div>
      </div>
      <div data-tab-content="folders" class="messenger-folders is-active">
        <ul class="messenger-folder__list">
            <?php foreach($folders as $k => $item) :?>
              <li class="messenger-folder__item <?=$k === 2 ? 'is-active' : ''?>">
                <div class="folder <?=$k === 2 ? 'is-active' : ''?>">
                  <div class="folder-composition">
                    <div class="folder-indicator indicator__<?=$item["color"] ?>"></div>
                    <svg class="ui-icon">
                      <use xlink:href="img/_src/sprite.svg#folder"></use>
                    </svg>
                    <div class="folder-number">
                        <?=$item["number"] ?>
                    </div>
                  </div>
                  <p class="folder-name">
                      <?=$item["name"] ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
      </div>
      <div data-tab-content="dialogs" class="messenger-dialogs">
        <ul class="messenger-dialog__list">
            <?php foreach($dialogs as $k => $item) :?>
              <li class="messenger-dialog__item <?=$k === 2 ? 'is-active' : ''?>">
                <div class="messenger-dialog <?=$k === 2 ? 'is-active' : ''?>">
                  <p class="dialog-name"><?=$item["id"] ?></p>
                  <div class="action action_<?=$item["color"] ?> action_placement-right" data-component="dropdown" data-placement-popup="right">
                    <button class="action-target" data-target>
                      <span class="action-target__point"></span>
                      <svg class="ui-icon action-icon">
                        <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                      </svg>
                    </button>
                    <div class="action-popup">
                      <ul class="action-list">
                        <li>
                          <button class="action-control" data-modal="#modal-crmItemEdit">Редактировать</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
      </div>
      <div class="messenger-dialog__detail">
        <div class="messenger-dialog__container">

          <div class="messenger-dialog__scrolling">
            <div class="messenger-bar__top">
              <div class="action-container">
                <div class="action action_green action_placement-right" data-placement-popup="left" data-component="dropdown">
                  <button class="action-target" data-target>
                    <span class="action-target__point"></span>
                    <svg class="ui-icon action-icon">
                      <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                    </svg>
                  </button>
                  <div class="action-popup">
                    <ul class="action-list">
                      <li>
                        <button class="action-control" data-modal="#modal-crmItemEdit">Редактировать</button>
                      </li>
                    </ul>
                  </div>
                </div>
                <p class="text-size_medium action-label"><b>Активный</b></p>
              </div>
              <div class="">
                <p class="text-size_medium m-0"><b>ID: <a href="#" class="link link_decoration c-gray-darken">1699853</a></b></p>
              </div>
              <div class="">
                <div class="socs__list">
                    <?php foreach($payload["managersocs"] as $k => $i): ?>
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
              </div>
              <div class="">
                <button class="button button_accent button_variant-box">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#chart"></use>
                  </svg>
                </button>
              </div>
            </div>

              <?php include_once "tagsTraffic.php" ?>

              <?php include_once "tagsVertical.php" ?>

            <div class="panel panel-stats">
              <div class="panel-inner">
                <div class="panel-header panel-header_underline">
                  <p class="text-size_default"><b>Заметки</b></p>
                </div>
                <div class="panel-body">
                  <div class="note__list">
                    <div class="note note-variant_messenger">
                      <p class="note-date">21.06.2022</p>
                      <p class="note-text">Duis et erat sed arcu venenatis ornare. Vestibulum eros est, condimentum in viverra quis, condimentum non turpis</p>
                    </div>
                    <div class="note note-variant_messenger">
                      <p class="note-date">21.06.2022</p>
                      <p class="note-text">Duis et erat sed arcu venenatis ornare. Vestibulum eros est, condimentum in viverra quis, condimentum non turpis</p>
                    </div>
                    <div class="note note-variant_messenger">
                      <p class="note-date">21.06.2022</p>
                      <p class="note-text">Duis et erat sed arcu venenatis ornare. Vestibulum eros est, condimentum in viverra quis, condimentum non turpis</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="messenger-dialog__fixed">
            <div class="messenger-controls">
              <div class="messenger-write">
                  <?php include_once "views/components/forms/crmMessageForm.php" ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


</section>

