<?php

$offers = [
  [
    "status" => "on",
    "id" => "1699853",
    "title" => "Имя оффера",
    "rate" => "999 999,99$",
    "note" => "Через некоторое время мы обнаружили, что наш контент-менеджер обладает повышенным количеством свободного времени и решили добавить всем сделать дополнительной работы."
  ],
  [
      "status" => "off",
      "id" => "1699853",
      "title" => "Длинное имя офера на несколько строк",
      "rate" => "999 999,99$",
      "note" => "Через некоторое время мы обнаружили, что наш контент-менеджер обладает повышенным количеством свободного времени и решили добавить всем сделать дополнительной работы."
  ],
  [
      "status" => "on",
      "id" => "1699853",
      "title" => "Имя оффера",
      "rate" => "999 999,99$",
      "note" => "Через некоторое время мы обнаружили, что наш контент-менеджер обладает повышенным количеством свободного времени и решили добавить всем сделать дополнительной работы."
  ],
  [
      "status" => "off",
      "id" => "1699853",
      "title" => "Длинное имя офера на несколько строк",
      "rate" => "999 999,99$",
      "note" => "Через некоторое время мы обнаружили, что наш контент-менеджер обладает повышенным количеством свободного времени и решили добавить всем сделать дополнительной работы."
  ],
    [
        "status" => "on",
        "id" => "1699853",
        "title" => "Имя оффера",
        "rate" => "999 999,99$",
        "note" => "Через некоторое время мы обнаружили, что наш контент-менеджер обладает повышенным количеством свободного времени и решили добавить всем сделать дополнительной работы."
    ],
]

?>

<section class="profile-offer__list">
  <?php foreach ($offers as $offer): ?>
    <div class="profile-offer__panel">
      <div class="panel-inner">
        <div class="panel-row">
          <div class="panel-block">
            <div class="panel-col">
              <div class="entity__state">
                <div class="action <?=$offer["status"] === "on" ? "action_green" : "action_orange" ?>">
                  <div class="action-target__point"></div>
                </div>
                <button class="button button_link" data-modal="#modal-changeStatusOffer"><?=$offer["status"] === "on" ? "Подключен" : "Отключен" ?></button>
              </div>
            </div>
          </div>
          <div class="panel-block">
            <div class="panel-col">
              <p class="text-size_default"><b>ID оффера:</b><span class="text-size_medium"><?=$offer["id"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Имя оффера:</b><span class="text-size_medium"><?=$offer["title"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>Ставка:</b><span class="text-size_medium price c-accent"><?=$offer["rate"]?></span></p>
            </div>
            <div class="panel-col">
              <button class="button button_accent" data-modal="#modal-sendNewProfileData">Сменить</button>
            </div>
            <div class="panel-col">
              <div class="note-container">
                <p class="note note_short">
                  <span><?=$offer["note"]?></span>
                </p>
                <div class="note-popup">
                  <div class="note">
                    <span><?=$offer["note"]?></span>
                  </div>
                  <button class="button button_link js-note-hide">Свернуть</button>
                </div>
                <button class="button button_link js-note-show">Смотреть заметку</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
