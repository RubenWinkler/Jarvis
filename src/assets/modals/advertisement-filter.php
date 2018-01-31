<!-- Advertisement-Filter-Button -->
<button type="button" class="btn btn-primary modal-button" data-toggle="modal" data-target="#advertisementFilterModal">Filter</button>

<!-- Advertisement-Filter -->
<div class="modal fade" id="advertisementFilterModal" tabindex="-1" role="dialog" aria-labelledby="advertisementFilterModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importClientModalLabel">Filteroptionen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" action="">
          <div class="form-group row">
            <label for="from_creation_date" class="col-sm-6 col-form-label">From Creation Date:</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-sm" id="from_creation_date" placeholder="From Creation Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="to_creation_date" class="col-sm-6 col-form-label">To Creation Date:</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-sm" id="to_creation_date" placeholder="To Creation Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="external_id" class="col-sm-6 col-form-label">External ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="external_id" placeholder="External ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_business_reference" class="col-sm-6 col-form-label">Client Business Reference:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="client_business_reference" placeholder="Client Business Reference">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_id" class="col-sm-6 col-form-label">Client ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="client_id" placeholder="Client ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_name" class="col-sm-6 col-form-label">Client Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="client_name" placeholder="Client Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="agency_id" class="col-sm-6 col-form-label">Agency ID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="agency_id" placeholder="Agency ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="active" class="col-sm-6 col-form-label">Active:</label>
            <div class="col-sm-6">
              <select class="custom-select form-control-sm" id="active">
                <option selected></option>
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="agency" class="col-sm-6 col-form-label">Agency:</label>
            <div class="col-sm-6">
              <select class="custom-select form-control-sm" id="agency">
                <option selected></option>
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_name" class="col-sm-6 col-form-label">Parent Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="parent_name" placeholder="Parent Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_id" class="col-sm-6 col-form-label">Parent ID:</label>
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
