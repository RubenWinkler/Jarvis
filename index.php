<?php $page_title = "Kundeninformationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

<h2>Dashboard</h2>

<div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Clientverwaltung</h3>
        <p class="card-text">Hier findest du alle Optionen, um Clients zu verwalten.</p>
        <a href="#" class="btn btn-primary">Neuen Client erstellen</a><br><br>
        <a href="#" class="btn btn-primary">Clients ansehen</a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Synchronisationen & Anzeigen</h3>
        <p class="card-text">Hier findest du alle Optionen, um Anzeigen zu verwalten.</p>
        <a href="#" class="btn btn-primary">Synchronisationen ansehen</a><br><br>
        <a href="#" class="btn btn-primary">Anzeigen ansehen</a>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Ticketverwaltung & Sonstiges</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Tickets ansehen</a><br><br>
        <a href="#" class="btn btn-primary">Dokumentation ansehen</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-6">
    <h3>Zuletzt erstellte Clients</h3>
  </div>
  <div class="col-6">
    <h3>Fehlgeschlagene Synchronisationen</h3>
  </div>
</div>

</main>

<?php require_once("./src/assets/footer.php"); ?>
