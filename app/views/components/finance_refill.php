<div class="panel-filters">
    <?php include_once "forms/financeRefillFilterForm.php" ?>
</div>

<section class="finance">
  <div class="finance__list">
    <?php for($i=0;$i<=10;$i++): ?>
      <div class="finance__panel">
        <div class="panel-inner">
          <div class="panel-body">
            <div class="panel-row">
              <p class="text-size_default"><b>ID:</b><span class="text-size_medium c-gray-darken "> 1699853</span></p>
              <p class="text-size_default" data-component="copy" data-content="positivelight"><b>Менеджер:</b><span class="text-size_medium  c-gray-darken link_decoration"> positivelight</span></p>
              <p class="text-size_default"><b>Сумма:</b><span class="price c-accent "> 12 696,22$</span></p>
              <p class="text-size_default"><b>Дата:</b><span class="text-size_medium c-gray-darken "> 01/02/2022</span></p>
              <p class="text-size_default"><b>Типа баланса:</b><span class="text-size_medium c-gray-darken "> Активный</span></p>
            </div>
            <div class="panel-row">
              <p class="text-size_default"><b>Комментарий:</b><span class="text-size_medium c-gray-darken "> Не следует, однако забывать, что укрепление и развитие структуры позволяет выполнять важные задания по разработке соответствующий способ</span></p>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</section>

<?php
include "pagination.php" ?>

<script>
  const buttons = [...document.querySelectorAll(`[data-component="toggleButton"]`)]
  for (const btn of buttons) {
    btn.addEventListener("click", (e) => {
      e.preventDefault()
      const panel = btn.closest(".finance__panel")

      window.whocpa.toggleButton.toggle(btn, {
        cbActive: () => {
          panel.classList.add("is-toggled")
        },
        cbDisable: () => {
          panel.classList.remove("is-toggled")
        }
      })
    })
  }

</script>
