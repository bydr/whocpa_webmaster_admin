
<?php

$folders = [
    [
        "color" => "green",
        "number" => 71,
        "name" => "Все запросы"
    ],
    [
        "color" => "orange",
        "number" => 35,
        "name" => "Рассылки/Статьи"
    ],

];

$dialogs= [
    [
        "id" => "54",
        "o_title" => "Название №31 Название №31 Название №31 Название №31 Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],[
        "id" => "54",
        "o_title" => "Название №31",
        "category"=> "Гемблинг"
    ],
];


?>


<section class="news">

  <div class="panel-filters">
      <?php include_once "forms/newsFilterForm.php" ?>
  </div>

  <div class="news-panel">
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
          <li class="messenger-folder__item">
            <button class="button button_accent w-100 mb-10" type="button" data-modal="#modal-createNews">Создать</button>
          </li>
            <?php foreach($folders as $k => $item) :?>
              <li class="messenger-folder__item <?=$k === 2 ? 'is-active' : ''?>">
                <div class="folder <?=$k === 2 ? 'is-active' : ''?>">
                  <div class="folder-composition">
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
                  <div class="news-dialog">
                    <div class="news-control">
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
                              <button class="action-control">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#play"></use>
                                </svg>
                                <span>Запуск</span>
                              </button>
                            </li>
                            <li>
                              <button class="action-control" >
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#editPencil"></use>
                                </svg>
                                <span>Редактировать</span></button>
                            </li>
                            <li>
                              <button class="action-control" >
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#delete"></use>
                                </svg>
                                <span>Удалить</span></button>
                            </li>
                          </ul>

                        </div>
                      </div>
                    </div>
                    <div class="news-dialog__body">
                      <p class="text-size_default">
                        <b>ID: </b>
                        <span class="text-size_medium c-gray-darken "><?=$item["id"] ?></span>
                      </p>
                      <p class="text-size_default">
                        <b>Оффер:</b>
                        <span class="text-size_medium c-gray-darken text-ellipsis "><?=$item["o_title"] ?></span>
                      </p>
                      <p class="text-size_default">
                        <b>Категория: </b>
                        <span class="text-size_medium c-gray-darken "><?=$item["category"] ?></span>
                      </p>
                    </div>
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
      <div class="news-item__detail">
        <div class="news-item__detail__inner">
          <div class="news-image__main">
            <img src="img/_src/newsPromo.png" alt="">
          </div>
          <div class="news-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas ut velit pharetra, etiam facilisis metus. Aliquet aliquam aenean sit ipsum nisi, gravida quisque. Viverra mi nisi, in risus ornare cras orci. Ut rhoncus gravida magnis feugiat. Vitae velit volutpat ut commodo massa, quis ornare arcu aliquam. Egestas porta accumsan lectus blandit orci neque nulla. Morbi dictum cursus eros, cursus sed scelerisque interdum suspendisse. Donec convallis velit eget consequat cursus scelerisque. Vitae quis augue ac arcu. Non duis sed elementum malesuada condimentum.
            </p>
            <p>
              Lacus integer sed elementum dictumst enim, dui cursus feugiat. Iaculis rhoncus tristique turpis suspendisse cras urna. Felis neque malesuada purus pulvinar bibendum consectetur augue. Sagittis vivamus sollicitudin aliquam consequat, felis sed aliquet sed. Donec malesuada in odio morbi etiam lectus sodales.
            </p><p>
              Diam tellus viverra arcu diam non felis maecenas egestas sed. Morbi laoreet a at pretium at odio feugiat volutpat. Erat in in lacinia suscipit. Adipiscing vel senectus amet diam netus maecenas porta tellus. Quis blandit aliquet eros vulputate odio. Mattis amet eleifend faucibus lorem quisque mattis eget volutpat nisi. Porttitor tristique erat quis ut diam facilisis aliquam aliquet. Vitae sed pellentesque sit accumsan. Pellentesque eget ultricies pellentesque nunc enim egestas curabitur enim et. Pellentesque venenatis elit eros, interdum euismod congue non.
            </p><p>
              Facilisis dolor urna volutpat nisl dictum commodo proin ac habitant. Eu eu pellentesque cursus tellus nulla accumsan est aliquam. Pellentesque at sed pellentesque risus, enim. Velit imperdiet commodo vestibulum consectetur. Urna eget odio erat ornare congue. Viverra consequat et et dui tellus eu.
              Tellus massa dolor, eget amet pretium risus odio. Mattis sit scelerisque nisl rhoncus. Ut vulputate mus scelerisque dictum sagittis. Fusce malesuada accumsan, adipiscing vulputate tristique amet, consectetur leo sem. Eget porttitor fames sed tortor dictum ipsum sed feugiat. Est in pharetra mattis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>

<?php
include_once "pagination.php" ?>
