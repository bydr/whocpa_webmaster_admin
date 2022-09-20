<div class="modal" id="modal-createTicket" data-component="modal">
    <div class="modal-wrapper">
      <div class="modal-content">
            <div class="modal-content__body">

              <div class="modal-title">
                <h3>Создать тикет</h3>
              </div>

                <?php include_once "views/components/forms/createTicketForm.php" ?>

            </div>
            <button type="button" class="button modal-close" data-modal-hide>
                <svg class="ui-icon">
                    <use xlink:href="img/_src/sprite.svg#x"></use>
                </svg>
            </button>
        </div>
    </div>
</div>
