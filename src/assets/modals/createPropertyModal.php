<!-- Neue-Eigenschaft-erstellen-Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPropertyModal">Neue Property erstellen</button>

<!-- Neue-Eigenschaft-erstellen-Modal -->
<div class="modal fade" id="newPropertyModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newPropertyModalLabel">Neue Property erstellen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-group row">
            <label for="create_property_name" class="col-sm-4 col-form-label">Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_property_name" placeholder="Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_property_label" class="col-sm-4 col-form-label">Label:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="create_property_label" placeholder="Label">
            </div>
          </div>
          <div class="form-group row">
            <label for="create_client_type" class="col-sm-4 col-form-label">Type:</label>
            <div class="col-sm-4">
              <select class="custom-select" id="create_property_type">
                <option selected value="1">String</option>
                <option value="2">Text</option>
                <option value="3">Template</option>
                <option value="4">Password</option>
                <option value="5">Long</option>
                <option value="6">Boolean</option>
                <option value="7">Date</option>
                <option value="8">Attachment</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="create_property_description" class="col-sm-4 col-form-label">Description:</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="create_property_description" placeholder="Description" rows="3"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="modal_submit_button" onclick="swal('Erfolgreich!', 'Property wurde importiert!', 'success');">Erstellen</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Abbrechen</button>
      </div>
    </div>
  </div>
</div>
