<div class="modal" id="modal-createNews" data-component="modal">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-title">
                    <h3>Создать новость</h3>
                </div>

              <div class="form-group">
                <div class="form-control form-control_view-col">
                  <select name="typeNews" id="typeNews" class="js-choice custom-select"
                          data-search>
                    <option value="" disabled selected>Выберите вид новости</option>
                    <option value="#modal-createNewsOffers">Новость по офферам</option>
                    <option value="#modal-createNewsSystem">Системная новость</option>
                    <option value="#modal-createNewsStopOffer">Остановка оффера</option>
                  </select>
                </div>
              </div>

            </div>
            <button type="button" class="button modal-close" data-modal-hide>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#x"></use>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
  const select = document.querySelector(`[name="typeNews"]`)

  if (select) {
    select.addEventListener("change", (e) => {
      for (const modalId of window.whocpa.modal.opened) {
        const modal = document.querySelector(`[id="${modalId}"]`)
        if (!!modal) {
          window.whocpa.modal.hide(modal)
        }
      }

      const targetModal = document.querySelector(`${e.target.value}`)
      if (!!targetModal) {
        window.whocpa.modal.show(targetModal)
      }

    })
  }
</script>
