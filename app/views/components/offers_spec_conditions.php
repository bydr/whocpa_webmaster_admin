<div class="panel-filters">
    <?php include_once "forms/offersSpecCondsFilterForm.php" ?>
</div>

<div class="offers-controls">
  <div class="button_group-row">
    <button class="button button_accent" data-modal="#modal-createSpecialCondition">Добавить спец. условие</button>
  </div>
    <?php include "pagination.php" ?>
</div>

<section class="offers__list">
  <div class="offers__panel">
    <div class="offers-entities__list" style="margin: 0;">
        <?php include_once "offers_spec_conditions_list.php"?>
    </div>
  </div>
</section>

<script>
  const buttons3 = [...document.querySelectorAll(`[data-component="toggleButton"]`)]
  for (const btn of buttons3) {
    btn.addEventListener("click", (e) => {
      e.preventDefault()
      const panel = btn.closest(".panel")

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
