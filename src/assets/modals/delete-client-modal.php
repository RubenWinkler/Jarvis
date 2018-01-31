<!-- Kunden-löschen-Button -->
<button type="button" class="no-btn modal-button" data-toggle="modal" data-target="#deleteClientModal">
  <i class="fa fa-trash-o" aria-hidden="true"></i>
</button>

<!-- Kunden-löschen-Modal -->
<div class="modal fade" id="deleteClientModal" tabindex="-1" role="dialog" aria-labelledby="importClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteClientModalLabel">Kunden wirklich löschen?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <span>Das Löschen kann nicht rückgängig gemacht werden.</span>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
        <button type="submit" class="btn btn-primary" id="modal_submit_button">Löschen</button>
      </div>
    </div>
  </div>
</div>
