<?php
$nav = [
    [
        "icon" => "equal",
        "name" => "Дашборд",
        "children" => []
    ],
    [
        "icon" => "user",
        "name" => "Пользователи",
        "children" => [
            [
                "icon" => "users",
                "name" => "Все пользователи"
            ],
            [
                "icon" => "userAdd",
                "name" => "Добавить"
            ],
            [
                "icon" => "userRemove",
                "name" => "Удалить"
            ],
            [
                "icon" => "userTag",
                "name" => "Партнёры и Рекламодатели"
            ],
        ]
    ],
    [
        "icon" => "keyboardOpen",
        "name" => "CRM",
        "children" => []
    ],
    [
        "icon" => "walletEmpty",
        "name" => "Финансы",
        "children" => []
    ],
    [
        "icon" => "notif",
        "name" => "Журналы",
        "children" => []
    ],
    [
        "icon" => "user",
        "name" => "Пользователи",
        "children" => [
            [
                "icon" => "users",
                "name" => "Все пользователи"
            ],
            [
                "icon" => "userAdd",
                "name" => "Добавить"
            ],
            [
                "icon" => "userRemove",
                "name" => "Удалить"
            ],
            [
                "icon" => "userTag",
                "name" => "Партнёры и Рекламодатели"
            ],
        ]
    ],
    [
        "icon" => "user",
        "name" => "Пользователи",
        "children" => [
            [
                "icon" => "users",
                "name" => "Все пользователи"
            ],
            [
                "icon" => "userAdd",
                "name" => "Добавить"
            ],
            [
                "icon" => "userRemove",
                "name" => "Удалить"
            ],
            [
                "icon" => "userTag",
                "name" => "Партнёры и Рекламодатели"
            ],
        ]
    ],
    [
        "icon" => "user",
        "name" => "Пользователи",
        "children" => [
            [
                "icon" => "users",
                "name" => "Все пользователи"
            ],
            [
                "icon" => "userAdd",
                "name" => "Добавить"
            ],
            [
                "icon" => "userRemove",
                "name" => "Удалить"
            ],
            [
                "icon" => "userTag",
                "name" => "Партнёры и Рекламодатели"
            ],
        ]
    ],
    [
        "icon" => "people",
        "name" => "Лиды",
        "children" => []
    ],
    [
        "icon" => "hierarchy",
        "name" => "Источники",
        "children" => []
    ],
    [
        "icon" => "receipt",
        "name" => "Тикеты",
        "children" => []
    ],
    [
        "icon" => "stickyNote",
        "name" => "Новости",
        "children" => []
    ],
    [
        "icon" => "edit",
        "name" => "Блог",
        "children" => []
    ],
    [
        "icon" => "receiptTxt",
        "name" => "Офферы",
        "children" => []
    ],
    [
        "icon" => "menuBoard",
        "name" => "Промо-материалы",
        "children" => []
    ],
    [
        "icon" => "graph",
        "name" => "Статистика",
        "children" => []
    ],
    [
        "icon" => "settingsGear",
        "name" => "Настройка",
        "children" => []
    ],
    [
        "icon" => "settings",
        "name" => "Инструменты",
        "children" => []
    ]

]
?>
<section class="sidebar-site">
    <div class="logo">
        <a href="#">
            <img src="img/_src/logo.svg">
        </a>
    </div>
    <div class="profile-short">
        <div class="avatar">
            <img src="https://1stwebdesigner.com/wp-content/uploads/2018/12/avatar-mockups-05.png" alt="">
        </div>
        <p class="paragraph_16 paragraph_bold">Алексей Костылев 2</p>

        <div data-component="copy" data-content="kostylev92@gmail.com">
            <button class="button">
                <span class="paragraph_14 c-gray-darken">kostylev92@gmail.com</span>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#copy"></use>
                </svg>
            </button>
        </div>

    </div>
    <nav class="nav">
        <ul>
            <?php foreach($nav as $item) : ?>
            <li>
                <?php if (count($item["children"]) > 0) : ?>
                    <div class="nav-item nav-item__dropdown">
                        <div class="dropdown" data-component="dropdown">
                            <button class="dropdown-target" data-target>
                            <span>
                                <svg class="ui-icon">
                                    <use xlink:href="img/_src/sprite.svg#<?=$item['icon'] ?>"></use>
                                </svg>
                                <span><?=$item['name'] ?></span>

                              <span class="badge__list">
                                <span class="badge badge_private">
                                  <span class="text-size_small"><b>10</b></span>
                                </span>
                                <span class="badge badge_accent">
                                  <span class="text-size_small"><b>2</b></span>
                                </span>
                              </span>

                            </span>
                                <svg class="ui-icon dropdown-icon">
                                    <use xlink:href="img/_src/sprite.svg#angleUp"></use>
                                </svg>
                            </button>
                            <div class="dropdown-popup">
                                <ul class="dropdown-list">
                                    <?php foreach($item["children"] as $child) : ?>
                                        <li>
                                            <a href="#" class="nav-item">
                                                <svg class="ui-icon">
                                                    <use xlink:href="img/_src/sprite.svg#<?=$child['icon'] ?>"></use>
                                                </svg>
                                                <span><?=$child['name'] ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <a href="#" class="nav-item">
                        <svg class="ui-icon">
                            <use xlink:href="img/_src/sprite.svg#<?=$item['icon'] ?>"></use>
                        </svg>
                        <span><?=$item['name'] ?></span>

                          <span class="badge__list">
                            <span class="badge badge_private">
                                <span class="text-size_small"><b>10</b></span>
                              </span>
                              <span class="badge badge_accent">
                                <span class="text-size_small"><b>2</b></span>
                              </span>
                          </span>

                    </a>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="rank">
        <p class="rank-number">62</p>
    </div>
</section>
<section class="sidebar-bar">
    <button class="button button_clean button_menu">
        <svg class="ui-icon ui-icon_menu">
            <use xlink:href="img/_src/sprite.svg#menu"></use>
        </svg>
        <svg class="ui-icon ui-icon_close">
            <use xlink:href="img/_src/sprite.svg#x"></use>
        </svg>
    </button>
    <div class="logo">
        <a href="#">
            <img src="img/_src/logo.svg">
        </a>
    </div>
</section>
