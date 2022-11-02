<?php
$traffic = [
    "Гэмблинг",
    "Товарка",
    "Нутра",
    "Гэйминг",
    "Слоты",
    "Категория",
    "Трафик №4",
];
?>
<div class="toggler">
  <div class="toggler-container">
    <div class="toggler-control">
      <span>Трафик</span>
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
        <div class="button_group button_group-row">
            <?php foreach ($traffic as $item) : ?>
              <button class="button button_secondary"><?=$item?></button>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
