
<section class="pagination <?=$WITH_BORDERED ? 'pagination_bordered' : '' ?>">
    <div class="pagination-bar">
        <button class="pagination-nav pagination-nav__prev">
            <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
            </svg>
        </button>
        <div class="pagination-pages">
            <button class="pagination-page is-active">01</button>
            <button class="pagination-page">02</button>
            <button class="pagination-page">03</button>
            <button class="pagination-page">04</button>
            <button class="pagination-page">...</button>
            <button class="pagination-page">34</button>
        </div>
        <button class="pagination-nav pagination-nav__next">
            <svg class="ui-icon">
                <use xlink:href="img/_src/sprite.svg#angleUp"></use>
            </svg>
        </button>
    </div>

  <?php if ($WITH_BUTTON_ADD) : ?>
    <button class="button button_accent" data-modal="<?=$OPEN_MODAL ?>">Добавить</button>
  <?php endif; ?>

    <?php if ($WITH_PER_PAGE) : ?>
    <div class="form-control">
      <label for="per_page">
        <span class="text-size_medium c-gray-darken nowrap">Показать на странице:</span>
      </label>
      <select name="per_page" id="per_page" class="js-choice custom-select">
        <option value="" disabled selected>10</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="500">500</option>
      </select>
    </div>
    <?php endif; ?>
</section>
