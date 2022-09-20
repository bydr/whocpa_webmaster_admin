
<?php

$folders = [
    [
        "color" => "green",
        "number" => 71,
        "name" => "Все запросы"
    ],
    [
        "color" => "orange",
        "number" => 24,
        "name" => ""
    ],
    [
        "color" => "blue",
        "number" => 13,
        "name" => ""
    ],
    [
        "color" => "orange-darken",
        "number" => 8,
        "name" => ""
    ],

];

$dialogs= [
    [
        "id" => "54",
        "web" => "16098"
    ],
    [
        "id" => "42",
        "web" => "17366"
    ],
    [
        "id" => "54",
        "web" => "16098"
    ],
    [
        "id" => "42",
        "web" => "17366"
    ],
    [
        "id" => "54",
        "web" => "16098"
    ],
    [
        "id" => "42",
        "web" => "17366"
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


<section class="tickets">

  <div class="panel-filters">
      <?php include_once "forms/ticketsFilterForm.php" ?>
  </div>

  <div class="ticket-panel">
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
              <li class="messenger-dialog__item <?=$k === 1 ? 'is-active' : ''?>">
                <div class="messenger-dialog <?=$k === 1 ? 'is-active' : ''?>">
                  <div class="ticket-dialog ">
                    <div class="ticket-number">
                      <p>#<?=$item["id"] ?></p>
                    </div>
                    <p class="ticket-webmaster">
                      <span>#<?=$item["web"] ?></span>
                      <span class="message-indicator indicator__accent"></span>
                    </p>
                    <p class="ticket-topic" title="Здесь должна быть размещена тема тикета">Здесь должна быть размещена тема тикета</p>
                    <button class="button button_clean button_size_small">
                      <svg class="ui-icon">
                        <use xlink:href="img/_src/sprite.svg#x"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
      </div>
      <div class="messenger-dialog__detail">
        <div class="messenger-dialog__container">

          <div class="messenger-dialog__scrolling">

            <div class="messenger-chat">
              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Технического прогресса, вне зависимости от их уровня, должны быть ограничены исключительно образом мышления. Противоположная точка зрения подразумевает, что независимые государства</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>В целом, конечно, курс о социально-ориентированно национальном</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Являясь всего лишь частью общей картины, непосредственные участники технического прогресса, вне зависимости от их уровня, должны быть ограничены исключительно образом мышления. Противоположная точка зрения подразумевает, что коричневые есть!</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>Противоположная точка зрения подразумевает, что независимые государства лишь добавляют фракционных нужд и заблокированы.</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Добавляют разногласий и заблокированы.</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>Как уже неоднократно упомянуто, явные признаки победы между их старейшин институционализации ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, забывают.</p>
                </div>
              </div>

              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Технического прогресса, вне зависимости от их уровня, должны быть ограничены исключительно образом мышления. Противоположная точка зрения подразумевает, что независимые государства</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>В целом, конечно, курс о социально-ориентированно национальном</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Являясь всего лишь частью общей картины, непосредственные участники технического прогресса, вне зависимости от их уровня, должны быть ограничены исключительно образом мышления. Противоположная точка зрения подразумевает, что коричневые есть!</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>Противоположная точка зрения подразумевает, что независимые государства лишь добавляют фракционных нужд и заблокированы.</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_user">
                <div class="chat-entity__user">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#user"></use>
                  </svg>
                </div>
                <div class="chat-entity__msg">
                  <p>Добавляют разногласий и заблокированы.</p>
                </div>
              </div>
              <div class="chat-entity chat-entity_role_manager">
                <div class="chat-entity__user">
                  <img src="img/_src/mockImage.png" alt="">
                </div>
                <div class="chat-entity__msg">
                  <p>Как уже неоднократно упомянуто, явные признаки победы между их старейшин институционализации ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, забывают.</p>
                </div>
              </div>
            </div>

          </div>

          <div class="messenger-dialog__fixed">
            <div class="messenger-controls">
              <div class="messenger-write">
                  <?php include_once "views/components/forms/ticketMessageForm.php" ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


</section>

