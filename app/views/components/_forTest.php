<?php
$pages = [
    [
        "title" => "Дашборд",
        "url" => "page_dashboard.php"
    ],
    [
        "title" => "Пользователи, раздел «Партнёры и Рекламодатели»",
        "url" => "page_users.php"
    ],
    [
        "title" => "Профиль партнера",
        "url" => "page_profile_partner.php"
    ]
]

?>

<div class="container">
    <br>
    <h2>Страницы для теста</h2>
    <ol>
        <?php foreach($pages as $page) :?>
            <li>
                <a href="<?=$page["url"] ?>"><?=$page["title"] ?></a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
