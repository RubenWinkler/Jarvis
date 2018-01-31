<?php $page_title = "Anzeigen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Anzeigen</h2>

  <?php require_once("src/assets/modals/advertisement-filter.php"); ?>

  <?php require("src/assets/pagination.php"); ?>

  <!-- Anzeigentabelle -->
  <section>

    <table class="table table-striped">
      <thead>
         <tr>
            <th>
              <a href="">
                ID
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Datum
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Uhrzeit
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Aktiv
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Typ
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Anzeigen-ID
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Anzeigentitel
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Inserent
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Kunde
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Jarvis-Status
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                Tapas-Status
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>
              <a href="">
                SST-ID
                <i class="fa fa-sort" aria-hidden="true"></i>
              </a>
            </th>
            <th>Aktion</th>
         </tr>
      </thead>
      <tbody>
        <tr>
           <td><a href="">10371</a></td>
           <td>31.01.2018</td>
           <td>15:26</td>
           <td>
             <input disabled checked type="checkbox">
           </td>
           <td>Neuanlage</td>
           <td>HL6547776</td>
           <td>Mitarbeiter (m/w) in der Buchhaltung</td>
           <td>Haufe-Lexware GmbH</td>
           <td>Haufe-Lexware GmbH</td>
           <td class="ok">exportieren</td>
           <td class="in-progress">importieren</td>
           <td></td>
           <td>
             <span>
               <a href="clientview.php">
                 <i class="fa fa-eye" aria-hidden="true"></i>
               </a>
             </span>
             <span>
               <a href="">
                 <i class="fa fa-bug" aria-hidden="true"></i>
               </a>
             </span>
           </td>
        </tr>
         <tr>
            <td><a href="">10370</a></td>
            <td>31.01.2018</td>
            <td>15:25</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Neuanlage</td>
            <td>HL6547891</td>
            <td>Mitarbeiter (m/w) in der Produktion</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679458633</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10369</a></td>
            <td>31.01.2018</td>
            <td>15:25</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Update</td>
            <td>HL6547888</td>
            <td>Mitarbeiter (m/w) in der Disposition</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679458896</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10368</a></td>
            <td>31.01.2018</td>
            <td>15:25</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Neuanlage</td>
            <td>HL6547899</td>
            <td>Mitarbeiter (m/w) in der Kategorisierung</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="ok">exportiert</td>
            <td class="error">FEHLER</td>
            <td>8854679458648</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10367</a></td>
            <td>31.01.2018</td>
            <td>15:25</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Deaktivierung</td>
            <td>HL6547887</td>
            <td>Mitarbeiter (m/w) im Marketing</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="error">FEHLER</td>
            <td></td>
            <td></td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10366</a></td>
            <td>31.01.2018</td>
            <td>15:24</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Deaktivierung</td>
            <td>HL6547891</td>
            <td>Mitarbeiter (m/w) im Vertrieb</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679458633</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10365</a></td>
            <td>31.01.2018</td>
            <td>15:24</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Neuanlage</td>
            <td>HL6547667</td>
            <td>Mitarbeiter (m/w) in der Fertigung</td>
            <td>Haufe-Lexware GmbH</td>
            <td>Haufe-Lexware GmbH</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679459966</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10364</a></td>
            <td>31.01.2018</td>
            <td>14:33</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Neuanlage</td>
            <td>EX8478456</td>
            <td>IT-Spezialist (m/w) in Vollzeit</td>
            <td>SAP IT Services GmbH</td>
            <td>Experteer</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679451132</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10363</a></td>
            <td>31.01.2018</td>
            <td>14:33</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Update</td>
            <td>EX6547655</td>
            <td>Ingenieur (m/w) für Karosseriebau</td>
            <td>Porsche AG</td>
            <td>Experteer</td>
            <td class="ok">exportiert</td>
            <td class="ok">importiert</td>
            <td>8854679454698</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10362</a></td>
            <td>31.01.2018</td>
            <td>14:32</td>
            <td>
              <input disabled type="checkbox">
            </td>
            <td>Neuanlage</td>
            <td>EX6547674</td>
            <td>Mitarbeiter (m/w) Riskomanagement</td>
            <td>Deutsche Bank AG</td>
            <td>Experteer</td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
         <tr>
            <td><a href="">10361</a></td>
            <td>31.01.2018</td>
            <td>14:32</td>
            <td>
              <input disabled checked type="checkbox">
            </td>
            <td>Deaktivierung</td>
            <td>EX6547664</td>
            <td>Oberflächenbeschichter (m/w)</td>
            <td>Bosch Internatinal AG</td>
            <td>Experteer</td>
            <td class="ok">exportiert</td>
            <td class="error">FEHLER</td>
            <td>8854679457913</td>
            <td>
              <span>
                <a href="clientview.php">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
              </span>
              <span>
                <a href="">
                  <i class="fa fa-bug" aria-hidden="true"></i>
                </a>
              </span>
            </td>
         </tr>
      </tbody>
   </table>

  </section>

</main>

<?php require_once("./src/assets/footer.php"); ?>
