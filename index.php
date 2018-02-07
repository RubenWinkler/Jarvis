<?php $page_title = "Dashboard | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

<div class="row">
  <div class="col-6 col-lg-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Clientverwaltung</h3>
        <p class="card-text">Hier findest du alle Optionen, um Clients zu verwalten.</p>
        <?php require_once("src/assets/modals/create-client-modal.php"); ?>
        <?php require_once("src/assets/modals/import-client-modal.php"); ?>
        <br>
        <a href="clientmanagement.php" class="btn btn-primary">Clients ansehen  <i class="fas fa-eye"></i></a>
      </div>
    </div>
  </div>
  <div class="col-6 col-lg-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Synchronisationen & Anzeigen</h3>
        <p class="card-text">Hier findest du alle Optionen, um Anzeigen zu verwalten.</p>
        <a href="synchronizations.php" class="btn btn-primary">Synchronisationen ansehen <i class="fas fa-eye"></i></a><br>
        <a href="advertisements.php" class="btn btn-primary">Anzeigen ansehen <i class="fas fa-eye"></i></a>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Ticketverwaltung & Sonstiges</h3>
        <p class="card-text">Hier findest du weitere Optionen rund um das Thema Jarvis.</p>
        <a href="#" class="btn btn-primary">Tickets ansehen  <i class="fas fa-eye"></i></a><br>
        <a href="#" class="btn btn-primary">Dokumentation ansehen  <i class="fas fa-eye"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-6">
    <h3>Zuletzt erstellte Clients</h3>
    <table class="table table-striped">

       <thead>
          <tr>
             <th>
                <a href="">ID</a>
             </th>
             <th>
                <a href="">Name</a>
             </th>
             <th>
                <a href="">Typ</a>
             </th>
             <th>
                <a href="">Datum</a>
             </th>
             <th>
                <a href="">Parent</a>
             </th>
             <th>Aktionen</th>
          </tr>
       </thead>

       <tbody>
          <tr>
             <td>
                <a href="clientview.php">13271</a>
             </td>
             <td>
               <a href="clientview.php">Lebenshilfe Starnberg e.V.</a>
             </td>
             <td>Direktkunde</td>
             <td>31.01.2018</td>
             <td>
               <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">14659</a>
             </td>
             <td>
               <a href="clientview.php">Königsteiner Basic</a>
             </td>
             <td>Dienstleister</td>
             <td>31.01.2018</td>
             <td>
               <a href="clientview.php">Default-Client</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">13271</a>
             </td>
             <td>
               <a href="clientview.php">AWS Personalmarketing GmbH</a>
             </td>
             <td>Agentur</td>
             <td>31.01.2018</td>
             <td>
               <a href="clientview.php">Königsteiner Basic</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">13554</a>
             </td>
             <td>
               <a href="clientview.php">Chirurgische Klinik Seefeld</a>
             </td>
             <td>Direktkunde</td>
             <td>31.01.2018</td>
             <td>
              <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">11234</a>
             </td>
             <td>
               <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>Mandant</td>
             <td>31.01.2018</td>
             <td>
               <a href="clientview.php">Default-Client</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">1</a>
             </td>
             <td>
               <a href="clientview.php">Default-Client</a>
             </td>
             <td></td>
             <td>31.01.2018</td>
             <td></td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">17946</a>
             </td>
             <td>
               <a href="clientview.php">Haufe-Lexware GmbH</a>
             </td>
             <td>Direktkunde</td>
             <td>31.01.2018</td>
             <td>
              <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">15564</a>
             </td>
             <td>
               <a href="clientview.php">Hays AG (VDI)</a>
             </td>
             <td>Direktkunde</td>
             <td>31.01.2018</td>
             <td>
              <a href="clientview.php">VDI Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <button type="button" class="no-btn" data-toggle="modal" data-target="#deleteClientModal">
                   <i class="fas fa-trash-alt" aria-hidden="true"></i>
                 </button>
               </span>
             </td>
          </tr>
       </tbody>

    </table>
  </div>
  <div class="col-12 col-xl-6">
    <h3>Fehlgeschlagene Synchronisationen</h3>
    <table class="table table-striped">
      <thead>
         <tr>
            <th>
              <a href="">ID</a>
            </th>
            <th>
              <a href="">Client</a>
            </th>
            <th>
              <a href="">Datum</a>
            </th>
            <th>
              <a href="">Zeit</a>
            </th>
            <th>
              <a href="">Ads</a>
            </th>
            <th>
              <a href="">Neu</a>
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
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842154</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>30.01.2018</td>
            <td>15:36</td>
            <td>36</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842141</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>30.01.2018</td>
            <td>09:36</td>
            <td>36</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842136</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>29.01.2018</td>
            <td>18:36</td>
            <td>36</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842122</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>29.01.2018</td>
            <td>09:36</td>
            <td>36</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="synchronization-error.php">842115</a></td>
            <td><a href="clientview.php">Haufe-Lexware GmbH</a></td>
            <td>28.01.2018</td>
            <td>18:36</td>
            <td>36</td>
            <td>12</td>
            <td>6</td>
            <td>8</td>
            <td class="error">FEHLER</td>
            <td>
              <span>
                <a href="synchronization-error.php">
                  <i class="fas fa-list" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
      </tbody>
   </table>
  </div>
</div>

</main>

<?php require_once("./src/assets/footer.php"); ?>
