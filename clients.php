<?php $page_title = "Kunden | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Kunden</h2>

  <!-- Neuen-Kunde-erstellen-Button -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newClientModal">Neuen Kunden erstellen</button>

  <!-- Neuen-Kunden-erstellen-Modal -->
  <div class="modal fade" id="newClientModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newClientModalLabel">Neuen Kunden erstellen</h5>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-primary" id="modal_submit_button">Erstellen</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Filterbutton -->
  <p class="collapse-container">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Filter
    </button>
  </p>

  <!-- Filter -->
  <div class="collapse" id="collapseExample">
    <div class="card card-block">
      <div class="container">
        <form method="get" action="">
          <div class="form-group row">
            <label for="from_creation_date" class="col-sm-3 col-form-label">From Creation Date:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control form-control-sm" id="from_creation_date" placeholder="From Creation Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="to_creation_date" class="col-sm-3 col-form-label">To Creation Date:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control form-control-sm" id="to_creation_date" placeholder="To Creation Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="external_id" class="col-sm-3 col-form-label">External ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="external_id" placeholder="External ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_business_reference" class="col-sm-3 col-form-label">Client Business Reference:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="client_business_reference" placeholder="Client Business Reference">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_id" class="col-sm-3 col-form-label">Client ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="client_id" placeholder="Client ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="client_name" class="col-sm-3 col-form-label">Client Name:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="client_name" placeholder="Client Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="agency_id" class="col-sm-3 col-form-label">Agency ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="agency_id" placeholder="Agency ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="active" class="col-sm-3 col-form-label">Active:</label>
            <div class="col-sm-4">
              <select class="custom-select form-control-sm" id="active">
                <option selected></option>
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="agency" class="col-sm-3 col-form-label">Agency:</label>
            <div class="col-sm-4">
              <select class="custom-select form-control-sm" id="agency">
                <option selected></option>
                <option value="1">Yes</option>
                <option value="2">No</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_name" class="col-sm-3 col-form-label">Parent Name:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="parent_name" placeholder="Parent Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="parent_id" class="col-sm-3 col-form-label">Parent ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="parent_id" placeholder="Parent ID">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-3 col-sm-4">
              <button type="submit" class="btn btn-primary btn-sm" id="submit_filter">Suchen</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <nav aria-label="Page navigation example" id="pagination">
    <ul class="pagination pagination-sm">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">1</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">2</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">3</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">4</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">5</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">6</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">7</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">8</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite" href="">9</a></li>
      <li class="page-item disabled"><a class="page-link">...</a></li>
      <li class="page-item"><a class="page-link" title="Gehe zu Seite 54" href="/jarvis-service-web/clients.grid.pager/54">54</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Kundentabelle -->
  <section>

    <table class="table table-striped">

       <thead>
          <tr>
             <th>
                <a rel="nofollow" href="">Id</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Name</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Client Business Ref</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Date Created</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Active</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">External Id</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Agency</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Agency Name</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Connection Type</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>
                <a rel="nofollow" href="">Parent Name</a>
                <a rel="nofollow" href="">
                  <i class="fa fa-sort" aria-hidden="true"></i>
                </a>
             </th>
             <th>Action</th>
          </tr>
       </thead>

       <tbody>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="">1</a>
             </td>
             <td>Default client</td>
             <td>&nbsp;</td>
             <td>26.07.2017</td>
             <td>
               <input disabled="disabled" name="checkbox" type="checkbox">
             </td>
             <td>&nbsp;</td>
             <td>
               <input disabled="disabled" name="checkbox_0" type="checkbox">
             </td>
             <td>
               <a href=""></a>
             </td>
             <td>&nbsp;</td>
             <td>
               <a href=""></a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a  onclick="" href="">
                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                 </a>
               </span>
             </td>
          <!-- </tr> -->
       </tbody>

    </table>

  </section>

  <!-- Pagination -->
  <nav aria-label="Page navigation example" id="pagination">
    <ul class="pagination pagination-sm">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item"><a class="page-link" href="#">7</a></li>
      <li class="page-item"><a class="page-link" href="#">8</a></li>
      <li class="page-item"><a class="page-link" href="#">9</a></li>
      <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
      <li class="page-item"><a class="page-link" href="#">54</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Neuen-Kunde-erstellen-Button -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newClientModal">Neuen Kunden erstellen</button>

</main>

<?php require_once("./src/assets/footer.php"); ?>
