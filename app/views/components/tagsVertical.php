<?php

$vertical = [
    "Нутра",
    "Казино",
    "Установка",
    "Слоты",
    "Товарка",
];
?>

<div class="toggler">
  <div class="toggler-container">
    <div class="toggler-control">
      <span>Вертикаль</span>
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
            <?php foreach ($vertical as $item) : ?>
              <button class="button button_dark"><?=$item?></button>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
