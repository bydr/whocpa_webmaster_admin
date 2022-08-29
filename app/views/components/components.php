<?php $dropdown = [
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
]
]

?>

<div class="container" style="background-color: #fff;">
    <br>
    <h2>Компоненты</h2>

    <hr>

    <h4>Dropdown</h4>
    <div class="dropdown" data-component="dropdown">
        <button class="dropdown-target" data-target>
            <span>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#<?=$dropdown['icon'] ?>"></use>
                </svg>
                <span><?=$dropdown['name'] ?></span>
            </span>
            <svg class="ui-icon dropdown-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
            </svg>
        </button>
        <div class="dropdown-popup">
            <ul class="dropdown-list">
                <?php foreach($dropdown["children"] as $child) : ?>
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
    <hr>
</div>
