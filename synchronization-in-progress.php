<?php $page_title = "Synchronisationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Synchronisation: 957811</h2>

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

  <h4>Zusammenfassung</h4>

  <table class="table table-striped table-not-full-width">
    <tbody>
      <tr>
         <th>
           Synchronisations ID:
         </th>
         <td>
           <a href="">957811</a>
         </td>
      </tr>
      <tr>
         <th>
           Client:
         </th>
         <td>
           <a href="">McFit Global Group</a>
         </td>
      </tr>
      <tr>
         <th>
           Datum:
         </th>
         <td>
           30.01.2018
         </td>
      </tr>
      <tr>
         <th>
           Uhrzeit:
         </th>
         <td>
           16:54
         </td>
      </tr>
      <tr>
         <th>
           abgerufene Anzeigen:
         </th>
         <td>
           5
         </td>
      </tr>
      <tr>
         <th>
           davon bereits aktiv:
         </th>
         <td>

         </td>
      </tr>
      <tr>
         <th>
           davon Neuanlagen:
         </th>
         <td>

         </td>
      </tr>
      <tr>
         <th>
           davon Updates:
         </th>
         <td>

         </td>
      </tr>
      <tr>
         <th>
           davon Updates:
         </th>
         <td>

         </td>
      </tr>
      <tr>
         <th>
           Status:
         </th>
         <td class="in-progress">
           SYNCHRONISIERT
         </td>
      </tr>
    </tbody>
 </table>

 <h4>Anzeigenliste</h4>

  <!-- Pagination -->
  <nav aria-label="Pagination">
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
              <a rel="nofollow" href="">Anzeigen-ID</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Anzeigentitel</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Client</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Typ</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Jarvis-Status</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Tapas-Status</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">Status</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a rel="nofollow" href="">SST ID</a>
              <a rel="nofollow" href="">
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>Aktionen</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><a href="">ad59d9asd</a></td>
            <td><a href="">Mustermitarbeiter (m/w) Vertrieb</a></td>
            <td>McFit Global Group</td>
            <td>Update</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td class="ok">O.K.</td>
            <td>84975812462</td>
            <td><a href=""><i class="fa fa-bug" aria-hidden="true"></i></a></td>
         </tr>
         <tr>
            <td><a href="">q325jhtzjq</a></td>
            <td><a href="">Mustermitarbeiter (m/w) Anzeigenproduktion</a></td>
            <td>McFit Global Group</td>
            <td>Neuanlage</td>
            <td class="ok">exportiert</td>
            <td class="error">fehlgeschlagen</td>
            <td class="error">FEHLER</td>
            <td>84975812462</td>
            <td><a href=""><i class="fa fa-bug" aria-hidden="true"></i></a></td>
         </tr>
         <tr>
            <td><a href="">ad59d9asd</a></td>
            <td><a href="">Mustermitarbeiter (m/w) Vertrieb</a></td>
            <td>McFit Global Group</td>
            <td>Neuanlage</td>
            <td class="ok">exportiert</td>
            <td class="in-progress">importieren</td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td><a href="">13fadfqa2</a></td>
            <td><a href="">Mustermitarbeiter (m/w) Disposition</a></td>
            <td>McFit Global Group</td>
            <td>FEHLER</td>
            <td class="error">fehlgeschlagen</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td><a href="">123fdfezk</a></td>
            <td><a href="">Mustermitarbeiter (m/w) Java-Entwicklung</a></td>
            <td>McFit Global Group</td>
            <td>Neuanlage</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td class="ok">O.K.</td>
            <td>84975812462</td>
            <td><a href=""><i class="fa fa-bug" aria-hidden="true"></i></a></td>
         </tr>
      </tbody>
   </table>

  </section>

  <!-- Pagination -->
  <nav aria-label="Pagination">
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
