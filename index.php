<?php $page_title = "Kundeninformationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

<div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Clientverwaltung</h3>
        <p class="card-text">Hier findest du alle Optionen, um Clients zu verwalten.</p>
        <?php require_once("src/assets/modals/create-client-modal.php"); ?>
        <?php require_once("src/assets/modals/import-client-modal.php"); ?>
        <br>
        <a href="clientmanagement.php" class="btn btn-primary">Clients ansehen</a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Synchronisationen & Anzeigen</h3>
        <p class="card-text">Hier findest du alle Optionen, um Anzeigen zu verwalten.</p>
        <a href="synchronizations.php" class="btn btn-primary">Synchronisationen ansehen</a><br>
        <a href="advertisements.php" class="btn btn-primary">Anzeigen ansehen</a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Ticketverwaltung & Sonstiges</h3>
        <p class="card-text">Hier findest du weitere Optionen rund um das Thema Jarvis.</p>
        <a href="#" class="btn btn-primary">Tickets ansehen</a><br>
        <a href="#" class="btn btn-primary">Dokumentation ansehen</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-3">
    <h3>Jarvis-Bericht</h3>
    <table class="table table-striped">
      <tr>
        <th>
          Clients (gesamt):
        </th>
        <td>
          967
        </td>
      </tr>
      <tr>
        <th>
          Clients (aktiv):
        </th>
        <td>
          156
        </td>
      </tr>
      <tr>
        <th>
          Direktkunden (gesamt):
        </th>
        <td>
          365
        </td>
      </tr>
      <tr>
        <th>
          Direktkunden (aktiv):
        </th>
        <td>
          166
        </td>
      </tr>
      <tr>
        <th>
          Agenturen (gesamt):
        </th>
        <td>
          72
        </td>
      </tr>
      <tr>
        <th>
          Agenturen (aktiv):
        </th>
        <td>
          37
        </td>
      </tr>
      <tr>
        <th>
          Backfill (gesamt):
        </th>
        <td>
          21
        </td>
      </tr>
      <tr>
        <th>
          Backfill (aktiv):
        </th>
        <td>
          13
        </td>
      </tr>
      <tr>
        <th>
          Mandanten:
        </th>
        <td>
          11
        </td>
      </tr>
      <tr>
        <th>
          Dienstleister:
        </th>
        <td>
          34
        </td>
      </tr>
      <tr>
        <th>
          Fehlerhafte Clients:
        </th>
        <td>
          3
        </td>
      </tr>
    </table>
  </div>
  <div class="col-3">
    <h3>Zuletzt erstellte Clients</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Typ</th>
          <th>Datum</th>
        </tr>
      </thead>
      <tr>
        <td><a href="clientview.php">13271</a></td>
        <td><a href="clientview.php">Lebenshilfe Starnberg e.V.</a></td>
        <td>Direktkunde</td>
        <td>31.01.2018</td>
      </tr>
      <tr>
        <td><a href="clientview.php">14659</a></td>
        <td><a href="clientview.php">Königsteiner Basic</a></td>
        <td>Dienstleister</td>
        <td>31.01.2018</td>
      </tr>
      <tr>
        <td><a href="clientview.php">13271</a></td>
        <td><a href="clientview.php">AWS Personalmarketing GmbH</a></td>
        <td>Agentur</td>
        <td>31.01.2018</td>
      </tr>
      <tr>
        <td><a href="clientview.php">13554</a></td>
        <td><a href="clientview.php">Chirurgische Klinik Seefeld</a></td>
        <td>Direktkunde</td>
        <td>31.01.2018</td>
      </tr>
      <tr>
        <td><a href="clientview.php">11234</a></td>
        <td><a href="clientview.php">Jobware Mandant Default</a></td>
        <td>Mandant</td>
        <td>31.01.2018</td>
      </tr>
      <tr>
        <td><a href="clientview.php">17946</a></td>
        <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
        <td>Direktkunde</td>
        <td>31.01.2018</td>
      </tr>
    </table>
  </div>
  <div class="col-6">
    <h3>Fehlgeschlagene Synchronisationen</h3>
    <table class="table table-striped">
      <thead>
         <tr>
            <th>
              <a href="">ID</a>
            </th>
            <th>
              <a href="">Kunde</a>
            </th>
            <th>
              <a href="">Datum</a>
            </th>
            <th>
              <a href="">Uhrzeit</a>
            </th>
            <th>
              <a href="">Anzeigen</a>
            </th>
            <th>
              <a href="">aktiv</a>
            </th>
            <th>
              <a href="">Bestand</a>
            </th>
            <th>
              <a href="">Neuanlagen</a>
            </th>
            <th>
              <a href="">Updates</a>
            </th>
            <th>
              <a href="">Fehler</a>
            </th>
            <th>
              <a href="">Status</a>
            </th>
            <th>Aktionen</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><a href="synchronization-error.php">842166</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>30.01.2018</td>
            <td>18:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td><a href="synchronization-error.php"><i class="fa fa-list" aria-hidden="true"></i></a></td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842154</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>30.01.2018</td>
            <td>15:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <a href="synchronization-error.php">
                <i class="fa fa-list" aria-hidden="true"></i>
              </a>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842141</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>30.01.2018</td>
            <td>09:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <a href="synchronization-error.php">
                <i class="fa fa-list" aria-hidden="true"></i>
              </a>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842136</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>29.01.2018</td>
            <td>18:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <a href="synchronization-error.php">
                <i class="fa fa-list" aria-hidden="true"></i>
              </a>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842122</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>29.01.2018</td>
            <td>09:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <a href="synchronization-error.php">
                <i class="fa fa-list" aria-hidden="true"></i>
              </a>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842115</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>28.01.2018</td>
            <td>18:36</td>
            <td>36</td>
            <td>36</td>
            <td>10</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <a href="synchronization-error.php">
                <i class="fa fa-list" aria-hidden="true"></i>
              </a>
            </td>
         </tr>
      </tbody>
   </table>
  </div>
</div>

</main>

<?php require_once("./src/assets/footer.php"); ?>
