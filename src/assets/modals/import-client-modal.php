<!-- Kunde-importieren-Button -->
<button type="button" class="btn btn-primary modal-button" data-toggle="modal" data-target="#importClientModal">Client importieren <i class="fas fa-download"></i></button>

<!-- Kunden-importieren-Modal -->
<div class="modal fade" id="importClientModal" tabindex="-1" role="dialog" aria-labelledby="importClientModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importClientModalLabel">Kunden importieren</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-group">
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="modal_submit_button" onclick="swal('Erfolgreich!', 'Client wurde importiert!', 'success');">Importieren</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>
