<?php $page_title = "Clientverwaltung | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Clientverwaltung</h2>

  <?php require_once("src/assets/modals/create-client-modal.php"); ?>

  <?php require_once("src/assets/modals/import-client-modal.php"); ?>

  <?php require_once("src/assets/modals/client-filter.php"); ?>

  <?php require("src/assets/pagination.php"); ?>

  <!-- Kundentabelle -->
  <section>

    <table class="table table-striped">

       <thead>
          <tr>
             <th>
                <a href="">ID</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Name</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Typ</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Client Business Ref</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Datum</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Aktiv</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Verbindungstyp</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
             </th>
             <th>
                <a href="">Parent</a>
                <a href="">
                  <i class="fas fa-sort"></i>
                </a>
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
             <td>JW-0154894571</td>
             <td>31.01.2018</td>
             <td>
               <input disabled checked type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
               <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td>JW-4892324621</td>
             <td>31.01.2018</td>
             <td>
               <input disabled type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
               <a href="clientview.php">Default-Client</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td>JW-4899122424</td>
             <td>31.01.2018</td>
             <td>
               <input disabled type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
               <a href="clientview.php">Königsteiner Basic</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td>JW-8467915314</td>
             <td>31.01.2018</td>
             <td>
               <input disabled checked type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
              <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td></td>
             <td>31.01.2018</td>
             <td>
               <input disabled type="checkbox">
             </td>
             <td>
             </td>
             <td>
               <a href="clientview.php">Default-Client</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td></td>
             <td>31.01.2018</td>
             <td>
               <input disabled type="checkbox">
             </td>
             <td>
             </td>
             <td>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td>JW-79456321524</td>
             <td>31.01.2018</td>
             <td>
               <input disabled checked type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
              <a href="clientview.php">Jobware Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
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
             <td>VDI-96548912347</td>
             <td>31.01.2018</td>
             <td>
               <input disabled checked type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
              <a href="clientview.php">VDI Mandant Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
               </span>
             </td>
          </tr>
          <tr>
             <td>
                <a href="clientview.php">16645</a>
             </td>
             <td>
               <a href="clientview.php">Experteer</a>
             </td>
             <td>Backfill</td>
             <td>MM-79465789424</td>
             <td>31.01.2018</td>
             <td>
               <input disabled checked type="checkbox">
             </td>
             <td>
               HTTP
             </td>
             <td>
              <a href="clientview.php">Multimandant Backfill Default</a>
             </td>
             <td>
               <span>
                 <a href="clientview.php">
                   <i class="fas fa-eye"></i>
                 </a>
               </span>
               <span>
                 <a href="">
                   <i class="fas fa-edit"></i>
                 </a>
               </span>
               <span>
                  <?php require("./src/assets/modals/delete-client-modal.php"); ?>
               </span>
             </td>
          </tr>
       </tbody>

    </table>

  </section>

</main>

<?php require_once("./src/assets/footer.php"); ?>
