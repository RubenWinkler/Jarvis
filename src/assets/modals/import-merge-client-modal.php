<!-- Kunde-importieren-Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importClientModal">Client importieren <i class="fa fa-download"></i></button>

<!-- Kunden-importieren-Modal -->
<div class="modal fade" id="importClientModal" tabindex="-1" role="dialog" aria-labelledby="importClientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importClientModalLabel">Kunden importieren</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" checked>
              Mit aktuellem Kunden zusammenlegen
            </label>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Kunden importieren</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="modal_submit_button">Importieren</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>
