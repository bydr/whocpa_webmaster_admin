<div class="panel-filters">
    <?php include_once "forms/sourcesFilterForm.php" ?>
</div>

<section class="source">
  <div class="source__list">
      <?php for($i=0;$i<=10;$i++): ?>
        <div class="source__panel panel-with_general">
      <div class="panel-inner">
        <div class="panel-general">
          <div class="action action_green action_placement-right" data-component="dropdown">
            <button class="action-target" data-target="">
              <span class="action-target__point"></span>
              <svg class="ui-icon action-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
              </svg>
            </button>
            <div class="action-popup">
              <ul class="action-list">
                <li>
                  <button class="action-control" data-modal="#modal-sourceInfo">Информация</button>
                </li>
                <li>
                  <button class="action-control" >Подтвердить</button>
                </li>
                <li>
                  <button class="action-control">Отклонить</button>
                </li>
                <li>
                  <button class="action-control">В архив</button>
                </li>
                <li>
                  <button class="action-control">Все источники</button>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <label class="checkbox checkbox-type__check">
            <input type="checkbox" name="checkbox">
            <span class="checkbox-inner">
                <span class="checkbox-box">
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#check"></use>
                  </svg>
                </span>
            </span>
          </label>
        </div>
        <div class="panel-body p-0">
          <div class="panel-row">
            <div class="panel-block">
              <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken "> 1699853</span></p>
              <p class="text-size_default" data-component="copy" data-content="positivelight"><b>Паблишер:</b><span class="text-size_medium  c-gray-darken link_decoration"> 1699853(positivelight)</span></p>
              <p class="text-size_default"><b>Дата создания:</b><span class="text-size_medium c-gray-darken "> 12/03/2022</span></p>
              <p class="text-size_default"><b>Тип источника(Имя):</b><span class="text-size_medium c-gray-darken "> Алексей28</span></p>
              <p class="text-size_default"><b>Причина отклонения:</b><span class="text-size_medium c-gray-darken "> Отменено(Объяснение примерно в 50 символов печатного текста)</span></p>
              <p class="text-size_default"><b>URL: </b><button class="button button_clean button_link " data-component="copy" data-content="https://assembly.com/aditiona">
                  <span class="text-size_default c-gray-darken"> https://assembly.com/aditiona...</span>
                  <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#copy"></use>
                  </svg>
                </button></p>

            </div>
          </div>
        </div>
      </div>
    </div>
      <?php endfor; ?>
  </div>
    <?php include "pagination.php" ?>

</section>
