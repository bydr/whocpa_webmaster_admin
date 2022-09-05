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
<div class="panel panel-stats">
    <div class="panel-inner">
        <div class="panel-header panel-header_underline">
            <p class="text-size_default"><b>Трафик</b></p>
        </div>
        <div class="panel-body">
            <div class="button_group button_group-row">
                <?php foreach ($traffic as $item) : ?>
                    <button class="button button_secondary"><?=$item?></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
