<?php

$vertical = [
    "Нутра",
    "Казино",
    "Установка",
    "Слоты",
    "Товарка",
];
?>

<div class="panel panel-stats">
    <div class="panel-inner">
        <div class="panel-header panel-header_underline">
            <p class="text-size_default"><b>Вертикаль</b></p>
        </div>
        <div class="panel-body">
            <div class="button_group button_group-row">
                <?php foreach ($vertical as $item) : ?>
                    <button class="button button_dark"><?=$item?></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
