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
    ],
    [
        "title" => "CRM",
        "url" => "page_crm.php"
    ],
    [
        "title" => "Финансы «Пополнение баланса» ",
        "url" => "page_fin_refill_balance.php"
    ],
    [
        "title" => "Источники",
        "url" => "page_sources.php"
    ],
    [
        "title" => "Тикеты",
        "url" => "page_tickets.php"
    ]
]

?>

<style>
  a {
      font-size: 16px;
      padding: 8px;
      width: 100%;
      display: flex;
      text-decoration: none;
      background: #f8f8f8;
      margin-bottom: 10px;
      font-weight: bold;
  }
  .container {
      padding: 20px;
  }
</style>

<div class="container" >
    <br>
    <h2>Страницы для теста</h2>
    <ol>
        <?php foreach($pages as $page) :?>
            <li>
                <a href="<?=$page["url"] ?>" target="_blank"><?=$page["title"] ?></a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
