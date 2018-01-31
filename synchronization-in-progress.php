<?php $page_title = "Synchronisationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Synchronisation: 957811</h2>

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

 <?php require_once("src/assets/modals/synchronization-advertisement-filter.php"); ?>

 <?php require_once("src/assets/pagination.php"); ?>

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
          <td>
            <a href="">
              <i class="fa fa-bug" aria-hidden="true"></i>
            </a>
          </td>
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
          <td>
            <a href="">
              <i class="fa fa-bug" aria-hidden="true"></i>
            </a>
          </td>
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
          <td>
            <a href="">
              <i class="fa fa-bug" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      </tbody>
   </table>

  </section>

</main>

<?php require_once("./src/assets/footer.php"); ?>
