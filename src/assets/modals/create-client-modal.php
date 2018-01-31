<!-- Neuen-Kunde-erstellen-Button -->
<button type="button" class="btn btn-primary modal-button" data-toggle="modal" data-target="#newClientModal">Neuen Client erstellen</button>

<!-- Neuen-Kunden-erstellen-Modal -->
<div class="modal fade" id="newClientModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newClientModalLabel">Neuen Client erstellen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-group row">
            <label for="create_client_client_name" class="col-sm-4 col-form-label">Client Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_client_client_name" placeholder="Client Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_connection_type" class="col-sm-4 col-form-label">Typ:</label>
            <div class="col-sm-4">
              <select class="custom-select" id="create_client_type">
                <option selected>Direktkunde</option>
                <option value="1">Agentur</option>
                <option value="1">Backfill</option>
                <option value="1">Dienstleister</option>
                <option value="1">Mandant</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_description" class="col-sm-4 col-form-label">Description:</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="create_client_description" placeholder="Description" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4">Active:</label>
            <div class="col-sm-8">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_client_business_ref" class="col-sm-4 col-form-label">Client Business Ref:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_client_client_business_ref" placeholder="Client Business Ref">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_external_id" class="col-sm-4 col-form-label">External Id:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_client_external_id" placeholder="External Id">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4">Is Agency:</label>
            <div class="col-sm-8">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_agency_id" class="col-sm-4 col-form-label">Agency Id:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_client_agency_id" placeholder="Agency Id">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_connection_type" class="col-sm-4 col-form-label">Connection Type:</label>
            <div class="col-sm-4">
              <select class="custom-select" id="create_client_connection_type">
                <option selected></option>
                <option value="1">HTML</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_parent_id" class="col-sm-4 col-form-label">Parent Id:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_client_parent_id" placeholder="Parent Id">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_date_created" class="col-sm-4 col-form-label">Date Created:</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="create_client_date_created">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="modal_submit_button">Erstellen</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>
