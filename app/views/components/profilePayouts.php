<?php

$payouts = [
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
    ],
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
    ],
    [
        "status" => "off",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
    ],
    [
        "status" => "off",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
    ],
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
    ],
]

?>

<section class="profile-payout__list" style="display: none">
  <?php foreach ($payouts as $payout): ?>
    <div class="profile-payout__panel">
      <div class="panel-inner">
        <div class="panel-row">
          <div class="panel-block">
            <div class="panel-col">
              <div class="entity__state">
                <div class="action <?=$payout["status"] === "on" ? "action_green" : "action_orange" ?>">
                  <div class="action-target__point"></div>
                </div>
                <p class="text-size_medium c-gray-darken"><b><?=$payout["status"] === "on" ? "Подключен" : "Отключен" ?></b></p>
              </div>
            </div>
          </div>
          <div class="panel-block">
            <div class="panel-col">
              <p class="text-size_default"><b>ID оффера:</b><span class="text-size_medium"><?=$payout["id"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Дата запроса:</b><span class="text-size_medium"><?=$payout["date1"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Дата выплаты:</b><span class="text-size_medium"><?=$payout["date2"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Кошелек:</b><span class="text-size_medium"><?=$payout["wallet"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Сумма:</b><span class="price c-accent"><?=$payout["sum"]?></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
