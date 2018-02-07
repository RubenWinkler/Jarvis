<!-- Client-Filter-Button -->
<button type="button" class="btn btn-primary modal-button" data-toggle="modal" data-target="#clientFilterModal">Filter <i class="fas fa-filter"></i></button>

<!-- Client-Filter -->
<div class="modal fade" id="clientFilterModal" tabindex="-1" role="dialog" aria-labelledby="clientFilterModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importClientModalLabel">Synchronisationen durchsuchen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-group row">
            <label for="status" class="col-sm-6 col-form-label">Status:</label>
            <div class="col-sm-6">
              <select class="custom-select form-control-sm" id="status">
                <option selected></option>
                <option>O.K.</option>
                <option>FEHLER</option>
                <option>SYNCHRONISIERT</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="client_name" class="col-sm-6 col-form-label">Client-Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="client_name" placeholder="Client-Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_business_reference" class="col-sm-6 col-form-label">Client-BR:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="client_business_reference" placeholder="Client-BR">
            </div>
          </div>
          <div class="form-group row">
            <label for="active" class="col-sm-6 col-form-label">Typ:</label>
            <div class="col-sm-6">
              <select class="custom-select form-control-sm" id="active">
                <option selected></option>
                <option>Direktkunde</option>
                <option>Agentur</option>
                <option>Backfill</option>
                <option>Dienstleister</option>
                <option>Mandant</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="synch_id" class="col-sm-6 col-form-label">Synch-ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="synch_id" placeholder="Synch-ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="creation_date" class="col-sm-6 col-form-label">Datum:</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-sm" id="creation_date">
            </div>
          </div>
          <div class="form-group row">
            <label for="to_creation_date" class="col-sm-6 col-form-label">Bis Datum:</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-sm" id="to_creation_date">
            </div>
          </div>
          <div class="form-group row">
            <label for="from_creation_date" class="col-sm-6 col-form-label">Ab Datum:</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-sm" id="from_creation_date">
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_name" class="col-sm-6 col-form-label">Parent-Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="parent_name" placeholder="Parent Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_id" class="col-sm-6 col-form-label">Parent-ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="parent_id" placeholder="Parent ID">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-6 col-sm-6">
              <button type="submit" class="btn btn-primary btn-sm" id="submit_filter">Suchen</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
