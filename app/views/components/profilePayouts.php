<?php

$payouts = [
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci architecto aspernatur aut beatae cum error esse, facere impedit ipsam iure molestias officia perferendis quis reprehenderit similique, velit voluptas voluptatum?"
    ],
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci architecto aspernatur aut beatae cum error esse, facere impedit ipsam iure molestias officia perferendis quis reprehenderit similique, velit voluptas voluptatum?"
    ],
    [
        "status" => "off",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci architecto aspernatur aut beatae cum error esse, facere impedit ipsam iure molestias officia perferendis quis reprehenderit similique, velit voluptas voluptatum?"
    ],
    [
        "status" => "off",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci architecto aspernatur aut beatae cum error esse, facere impedit ipsam iure molestias officia perferendis quis reprehenderit similique, velit voluptas voluptatum?"
    ],
    [
        "status" => "on",
        "id" => "1699853",
        "date1" => "01/12/2021",
        "date2" => "20/01/2022",
        "sum" => "999 999,99$",
        "wallet" => "6g9y8g2v169fs",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci architecto aspernatur aut beatae cum error esse, facere impedit ipsam iure molestias officia perferendis quis reprehenderit similique, velit voluptas voluptatum?"
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
                <p class="text-size_medium c-gray-darken"><b><?=$payout["status"] === "on" ? "??????????????????" : "????????????????" ?></b></p>
              </div>
              <div class="note-container">
                <div class="note-popup">
                  <div class="note">
                    <span><?=$payout["comment"]?></span>
                  </div>
                  <button class="button button_link js-note-hide">????????????????</button>
                </div>
                <button class="button button_link js-note-show">??????????????????????</button>
              </div>
            </div>
          </div>
          <div class="panel-block">
            <div class="panel-col">
              <p class="text-size_default"><b>ID ????????????:</b><span class="text-size_medium"><?=$payout["id"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>???????? ??????????????:</b><span class="text-size_medium"><?=$payout["date1"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>???????? ??????????????:</b><span class="text-size_medium"><?=$payout["date2"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>??????????????:</b><span class="text-size_medium"><?=$payout["wallet"]?></span></p>
            </div>
            <div class="panel-col">
              <p class="text-size_default"><b>??????????:</b><span class="price c-accent"><?=$payout["sum"]?></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
