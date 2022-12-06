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
        "title" => "Финансы",
        "url" => "page_finance.php"
    ],
    [
        "title" => "Финансы «Пополнение баланса» ",
        "url" => "page_finance_refill.php"
    ],
    [
        "title" => "Финансы (Журнал операций)",
        "url" => "page_finance_transaction_log.php"
    ],
    [
        "title" => "Источники",
        "url" => "page_sources.php"
    ],
    [
        "title" => "Тикеты",
        "url" => "page_tickets.php"
    ],
    [
        "title" => "Лиды",
        "url" => "page_leads.php"
    ],
    [
        "title" => "События",
        "url" => "page_events.php"
    ],
    [
        "title" => "Инструменты - проверка",
        "url" => "page_toolsCheck.php"
    ],
    [
        "title" => "Новости",
        "url" => "page_news.php"
    ],
    [
        "title" => "Промо",
        "url" => "page_promo.php"
    ],
    [
        "title" => "Офферы",
        "url" => "page_offers.php"
    ],
    [
        "title" => "Оффер обзор",
        "url" => "page_offer_overview.php"
    ],
    [
        "title" => "Оффер цели",
        "url" => "page_offer_purpose.php"
    ],
    [
        "title" => "Оффер вебмастера",
        "url" => "page_offer_webmasters.php"
    ],
    [
        "title" => "Оффер лендинги",
        "url" => "page_offer_landings.php"
    ],
    [
        "title" => "Оффер редактирование",
        "url" => "page_offer_edit.php"
    ],
    [
        "title" => "Оффер спец. условия",
        "url" => "page_offers_spec_conditions.php"
    ],
    [
        "title" => "Статистика",
        "url" => "page_statistic.php"
    ],
    [
        "title" => "Настройки",
        "url" => "page_settings.php"
    ],
    [
        "title" => "Авторизация",
        "url" => "page_signIn.php"
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
