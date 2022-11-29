<?php
$leads = [
    [
      "name" => "Все лиды"
    ],
    [
    "name" => "Спам лиды(%)"
    ],
    [
        "name" => "Холд % подтв. не закрытых лидов СРА"
    ],
    [
        "name" => "Закрыто подтвержденные лиды СРА"
    ],
    [
        "name" => "Качественные лиды"
    ],
    [
        "name" => "Холд лиды на проверке СРА"
    ],
    [
        "name" => "Закрыто отклоненные лиды СРА"
    ],
    [
        "name" => "Закрыто % подтвержденных лидов СРА"
    ],
    [
        "name" => "Спам лиды"
    ],
    [
        "name" => "Холд подтвержденные лиды СРА"
    ],
    [
        "name" => "Закрыто % отклоненных лидов СРА"
    ],
];

$finances = [
    [
        "name" => "Закрыто % отклоненных лидов СРА"
    ],
    [
        "name" => "Вебмастер Все финансы"
    ],
    [
        "name" => "PUB реферальные"
    ],
    [
        "name" => "PUB % реферальных"
    ],
    [
        "name" => "Вебмастер Финансы на проверке в холде СРА"
    ],
    [
        "name" => "Вебмастер % финансов на проверке в холде СРА"
    ],
    [
        "name" => "Вебмастер спам финансы закрыто"
    ],
    [
        "name" => "Вебмастер подтвержденные финансы в холде СРА"
    ],
    [
        "name" => "Вебмастер % подтвержденных финансов в холде СРА"
    ],
    [
        "name" => "Вебмастер отклоненные финансы закрыто СРА"
    ],
    [
        "name" => "Вебмастер % отклоненных финансов закрыто СРА"
    ],
    [
        "name" => "Вебмастер подтвержденные финансы закрыто СРА"
    ],
    [
        "name" => "Вебмастер % подтвержденных финансов закрыто СРА"
    ],
    [
        "name" => "Реклама Все финансы"
    ],
    [
        "name" => "WhoCPA Всего финансов"
    ],
    [
        "name" => "WhoCPA Финансы на проверке"
    ],
    [
        "name" => "WhoCPA подтвержденные финансы"
    ],
    [
        "name" => "WhoCPA % подтвержденных финансов"
    ]
];

$other = [
    [
        "name" => "Все регистрации"
    ],
    [
        "name" => "Вебмастеров активных"
    ],
    [
        "name" => "Вебмастеров работающих"
    ],
    [
        "name" => "Средний заработок вебмастеров"
    ],
    [
        "name" => "Офферов активных"
    ],
    [
        "name" => "Офферов работающих"
    ]
]
?>
<section class="statistic">
  <div class="panel panel-stats">
    <div class="toggler">
      <div class="toggler-container  is-active">
        <div class="toggler-control">
          <span>Фильтровать</span>
          <div class="ui-icon__wrapper">
            <svg class="ui-icon">
              <use xlink:href="img/_src/sprite.svg#plusCircle"></use>
            </svg>
            <svg class="ui-icon">
              <use xlink:href="img/_src/sprite.svg#closeCircle"></use>
            </svg>
          </div>
        </div>
        <div class="toggler-content">
          <div class="toggler-content__inner">
            <form class="form form_view-row" action="#">
              <div class="form-row align-content-center">
                <div class="form-col">
                  <div class="rangepicker-container is_fullwidth " data-component="rangepicker">
                    <label class="rangepicker-label text-size_medium">Дата: </label>
                    <div class="rangepicker-range">
                      <div class="rangepicker-start">
                        <label for="rp-s">от</label>
                        <input type="text" id="rp-s" class="rangepicker-input" data-input-start>
                      </div>
                      <div class="rangepicker-end">
                        <label for="rp-e">до</label>
                        <input type="text" id="rp-e" class="rangepicker-input" data-input-end>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Офферы</option>
                      <option value="vertical1">Оффер 1</option>
                      <option value="vertical2">Оффер 2</option>
                      <option value="vertical3">Оффер 3</option>
                      <option value="vertical4">Оффер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Паблишеры</option>
                      <option value="vertical1">Паблишер 1</option>
                      <option value="vertical2">Паблишер 2</option>
                      <option value="vertical3">Паблишер 3</option>
                      <option value="vertical4">Паблишер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Менеджеры</option>
                      <option value="vertical1">Менеджер 1</option>
                      <option value="vertical2">Менеджер 2</option>
                      <option value="vertical3">Менеджер 3</option>
                      <option value="vertical4">Менеджер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <input name="0" type="text" placeholder="Рекламодатель">
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <select name="status" id="status" class="js-choice custom-select">
                      <option value="" disabled selected>Страна</option>
                      <option value="mx">
                        Мексика
                      </option>
                      <option value="in">
                        Индия
                      </option>
                      <option value="id">
                        Индонезия
                      </option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="panel-header panel-header_underline">
                <p class="text-size_default c-dark"><b>Исключить</b></p>
              </div>

              <br>
              <div class="form-row">
                <div class="form-col">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Офферы</option>
                      <option value="vertical1">Оффер 1</option>
                      <option value="vertical2">Оффер 2</option>
                      <option value="vertical3">Оффер 3</option>
                      <option value="vertical4">Оффер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Паблишеры</option>
                      <option value="vertical1">Паблишер 1</option>
                      <option value="vertical2">Паблишер 2</option>
                      <option value="vertical3">Паблишер 3</option>
                      <option value="vertical4">Паблишер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="" disabled selected>Менеджеры</option>
                      <option value="vertical1">Менеджер 1</option>
                      <option value="vertical2">Менеджер 2</option>
                      <option value="vertical3">Менеджер 3</option>
                      <option value="vertical4">Менеджер 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <input name="0" type="text" placeholder="Рекламодатель">
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-control">
                    <select name="status" id="status" class="js-choice custom-select">
                      <option value="" disabled selected>Страна</option>
                      <option value="mx">
                        Мексика
                      </option>
                      <option value="in">
                        Индия
                      </option>
                      <option value="id">
                        Индонезия
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row justify-end">
                <div class="form-col  flex-initial">
                  <div class="form-control">
                    <label for="offer">Сортировка&nbsp;по: </label>
                    <select name="offer" id="offer" class="js-choice custom-select" data-search>
                      <option value="vertical1" selected>Паблишерам</option>
                      <option value="vertical2">Паблишерам 2</option>
                      <option value="vertical3">Паблишерам 3</option>
                      <option value="vertical4">Паблишерам 4</option>
                    </select>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="form-control">
                    <label class="checkbox checkbox-type__radio checkbox-text__top">
                      <input type="checkbox" name="checkbox">
                      <span class="checkbox-inner">
                        <span class="checkbox-box"></span>
                        <span class="checkbox-text">Только мои офферы</span>
                    </span>
                    </label>
                  </div>
                </div>
                <div class="form-col flex-initial">
                  <div class="button_group button_group-row ">
                    <button type="submit" class="button button_accent">Фильтровать</button>
                    <button type="button" class="button button_dark">Сброс</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-stats">
    <div class="toggler">
      <div class="toggler-container is-active">
        <div class="toggler-control">
          <span>Настройка столбцов</span>
          <div class="ui-icon__wrapper">
            <svg class="ui-icon">
              <use xlink:href="img/_src/sprite.svg#plusCircle"></use>
            </svg>
            <svg class="ui-icon">
              <use xlink:href="img/_src/sprite.svg#closeCircle"></use>
            </svg>
          </div>
        </div>
        <div class="toggler-content">
          <div class="toggler-content__inner">

            <div class="panel panel-stats panel_gray">
              <div class="panel-header panel-header_underline">
                <p class="text-size_default c-dark"><b>Лиды</b></p>
              </div>
              <div class="panel-body">
                <div class="statistic-form__row_3">
                    <?php foreach($leads as $lead) : ?>
                      <label class="checkbox checkbox-type__check">
                        <input type="checkbox" name="checkbox">
                        <span class="checkbox-inner">
                              <span class="checkbox-box">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#check"></use>
                                </svg>
                              </span>
                              <span class="checkbox-text text-size_medium fw-normal"><?=$lead["name"]?></span>
                          </span>
                      </label>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>

            <div class="panel panel-stats panel_gray">
              <div class="panel-header panel-header_underline">
                <p class="text-size_default c-dark"><b>Финансы</b></p>
              </div>
              <div class="panel-body">
                <div class="statistic-form__row_2">
                    <?php foreach($finances as $lead) : ?>
                      <label class="checkbox checkbox-type__check">
                        <input type="checkbox" name="checkbox">
                        <span class="checkbox-inner">
                              <span class="checkbox-box">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#check"></use>
                                </svg>
                              </span>
                              <span class="checkbox-text text-size_medium fw-normal"><?=$lead["name"]?></span>
                          </span>
                      </label>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>

            <div class="panel panel-stats panel_gray">
              <div class="panel-header panel-header_underline">
                <p class="text-size_default c-dark"><b>Другие</b></p>
              </div>
              <div class="panel-body">
                <div class="statistic-form__row_3">
                    <?php foreach($other as $lead) : ?>
                      <label class="checkbox checkbox-type__check">
                        <input type="checkbox" name="checkbox">
                        <span class="checkbox-inner">
                              <span class="checkbox-box">
                                <svg class="ui-icon">
                                  <use xlink:href="img/_src/sprite.svg#check"></use>
                                </svg>
                              </span>
                              <span class="checkbox-text text-size_medium fw-normal"><?=$lead["name"]?></span>
                          </span>
                      </label>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>

            <div class="form-row justify-end">
              <div class="form-col flex-initial">
                <div class="form-control">
                  <label class="checkbox checkbox-type__radio checkbox-text__top">
                    <input type="checkbox" name="checkbox">
                    <span class="checkbox-inner">
                        <span class="checkbox-box"></span>
                        <span class="checkbox-text">Сохранить фильтр</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="form-col flex-initial">
                <div class="button_group button_group-row ">
                  <button type="submit" class="button button_accent">Фильтровать</button>
                  <button type="button" class="button button_dark">Сброс</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-stats">
    <div class="panel-header">
      <p class="text-size_default"><b>Статистика</b></p>
    </div>
    <div class="panel-body">
      <div class="panel panel_gray">
        <div class="table-container">
          <table class="table table-striped">
            <colgroup>
              <col span="1" style="">
            </colgroup>
            <colgroup>
              <col span="3" style="">
            </colgroup>
            <colgroup>
              <col span="3" style="">
            </colgroup>
            <colgroup>
              <col span="3" style="">
            </colgroup>
            <thead>
            <tr class="table-row table-row__head">
              <th>
                <div class="table-cell">
                  &nbsp;
                </div>
              </th>
              <th colspan="3">
                <div class="table-cell">
                  Лиды
                </div>
              </th>
              <th colspan="3">
                <div class="table-cell">
                  Финансы
                </div>
              </th>
              <th colspan="3">
                <div class="table-cell">
                  Финансы 2
                </div>
              </th>
            </tr>
            <tr class="table-row">
              <th><div class="table-cell">Дата</div></th>
              <th><div class="table-cell">Качественные лиды</div></th>
              <th><div class="table-cell">Холд лиды на проверке СРА</div></th>
              <th><div class="table-cell">Спам лиды</div></th>
              <th><div class="table-cell">PUB реферальные</div></th>
              <th><div class="table-cell">Вебмастер спам финансы закрыто</div></th>
              <th><div class="table-cell">PUB % реферальных</div></th>
              <th><div class="table-cell">PUB реферальные</div></th>
              <th><div class="table-cell">Вебмастер спам финансы закрыто</div></th>
              <th><div class="table-cell">PUB % реферальных</div></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            <tr>
              <td><div class="table-cell">22.06.2022</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">100</div></td>
              <td><div class="table-cell">9 999</div></td>
              <td><div class="table-cell">9 999</div></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>

