<?php $page_title = "Anzeigen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Anzeigen</h2>

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
            <label for="from_last_modification_date" class="col-sm-3 col-form-label">From Last Modification Date:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control form-control-sm" id="from_last_modification_date" placeholder="From Last Modification Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="to_last_modification_date" class="col-sm-3 col-form-label">To Last Modification Date:</label>
            <div class="col-sm-4">
              <input type="date" class="form-control form-control-sm" id="to_last_modification_date" placeholder="To Last Modification Date">
            </div>
          </div>
          <div class="form-group row">
            <label for="advertisement_id" class="col-sm-3 col-form-label">Advertisement ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="advertisement_id" placeholder="Advertisement ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="external_id" class="col-sm-3 col-form-label">External ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="external_id" placeholder="External ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="tapas_business_reference" class="col-sm-3 col-form-label">Tapas Business Reference:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="tapas_business_reference" placeholder="Tapas Business Reference">
            </div>
          </div>
          <div class="form-group row">
            <label for="sst_status" class="col-sm-3 col-form-label">SST Status:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="sst_status" placeholder="SST Status">
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
            <label for="agency_name" class="col-sm-3 col-form-label">Agency Name:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="agency_name" placeholder="Agency Name">
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

  <!-- Anzeigentabelle -->
  <section>

    <table class="table table-striped">
      <thead>
         <tr>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/id">Id</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/id">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/dateCreated">Date Created</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/dateCreated">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/dateUpdated">Date Updated</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/dateUpdated">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/businessRef">Business Ref</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/businessRef">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/externalId">External Id</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/externalId">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/adAction">Sst Action</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/adAction">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/sstId">Sst Id</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/sstId">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/sstStatus">Sst Status</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/sstStatus">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/orderNumber">Order Number</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/orderNumber">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/active">Active</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/active">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/deactivationDate">Deactivation Date</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/deactivationDate">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/clientName">Client Name</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/clientName">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/agencyName">Agency Name</a>
              <a rel="nofollow" href="/jarvis-service-web/advertisements.grid.columns:sort/agencyName">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>Apr 18, 2016 16:35:53</td>
            <td>003446684</td>
            <td>321912</td>
            <td>Import</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
              <input disabled="disabled" checked="checked" id="checkbox" name="checkbox" type="checkbox">
            <td>&nbsp;</td>
            <td><a href="">Paulaner Brauerei GmbH &amp; Co. KG</a></td>
            <td><a href="">Mediaintown</a></td>
            <td>
              <span>
                <a href="">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
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

</main>

<?php require_once("./src/assets/footer.php"); ?>
