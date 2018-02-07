<?php $page_title = "Synchronisationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Synchronisationen</h2>

  <?php require_once("src/assets/modals/synchronizations-filter.php"); ?>

  <?php require("src/assets/pagination.php"); ?>

  <!-- Anzeigentabelle -->
  <section>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>
            <a href="">Synchronisations-ID</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">Kunde</a>
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
            <a href="">Uhrzeit</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">Anzeigen</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">davon aktiv</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">davon im Bestand</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">davon Neuanlagen</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">davon Updates</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">davon Fehler</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>
            <a href="">Status</a>
            <a href="">
              <i class="fas fa-sort"></i>
            </a>
          </th>
          <th>Aktionen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="">957811</a></td>
          <td>McFit Global Group</td>
          <td>30.01.2018</td>
          <td>16:54</td>
          <td>18</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="in-progress">SYNCHRONISIERT</td>
          <td>
            <span>
              <a href="synchronization-in-progress.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">842166</a></td>
          <td>Haufe-Lexware GmbH</td>
          <td>30.01.2018</td>
          <td>18:36</td>
          <td>36</td>
          <td>36</td>
          <td>10</td>
          <td>12</td>
          <td>6</td>
          <td>8</td>
          <td class="error">FEHLER</td>
          <td>
            <span>
              <a href="synchronization-error.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">846264</a></td>
          <td>Diakonie Starnberg e.V.</td>
          <td>29.01.2018</td>
          <td>17:36</td>
          <td>128</td>
          <td>128</td>
          <td>109</td>
          <td>3</td>
          <td>16</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">850362</a></td>
          <td>Porsche (VDI)</td>
          <td>29.01.2018</td>
          <td>16:22</td>
          <td>156</td>
          <td>156</td>
          <td>140</td>
          <td>10</td>
          <td>6</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">854460</a></td>
          <td>Experteer Backfill</td>
          <td>29.01.2018</td>
          <td>00:22</td>
          <td>22894</td>
          <td>22894</td>
          <td>22752</td>
          <td>133</td>
          <td>9</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">957811</a></td>
          <td>McFit Global Group</td>
          <td>28.01.2018</td>
          <td>12:54</td>
          <td>55</td>
          <td>55</td>
          <td>45</td>
          <td>5</td>
          <td>5</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">842973</a></td>
          <td>Haufe-Lexware GmbH</td>
          <td>28.01.2018</td>
          <td>15:36</td>
          <td>36</td>
          <td>36</td>
          <td>10</td>
          <td>12</td>
          <td>6</td>
          <td>8</td>
          <td class="error">FEHLER</td>
          <td>
            <span>
              <a href="synchronization-error.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">846745</a></td>
          <td>Diakonie Starnberg e.V.</td>
          <td>28.01.2018</td>
          <td>11:36</td>
          <td>128</td>
          <td>128</td>
          <td>109</td>
          <td>3</td>
          <td>16</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">850657</a></td>
          <td>Porsche (VDI)</td>
          <td>28.01.2018</td>
          <td>11:22</td>
          <td>156</td>
          <td>156</td>
          <td>140</td>
          <td>10</td>
          <td>6</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">858847</a></td>
          <td>Experteer Backfill</td>
          <td>28.01.2018</td>
          <td>00:22</td>
          <td>22894</td>
          <td>22894</td>
          <td>22752</td>
          <td>133</td>
          <td>9</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
          </tr>
        <tr>
          <td><a href="">957145</a></td>
          <td>McFit Global Group</td>
          <td>28.01.2018</td>
          <td>09:54</td>
          <td>55</td>
          <td>55</td>
          <td>45</td>
          <td>5</td>
          <td>5</td>
          <td>0</td>
          <td class="ok">O.K.</td>
          <td>
            <span>
              <a href="synchronization-ok.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
        <tr>
          <td><a href="">842147</a></td>
          <td>Haufe-Lexware GmbH</td>
          <td>28.01.2018</td>
          <td>11:36</td>
          <td>36</td>
          <td>36</td>
          <td>10</td>
          <td>12</td>
          <td>6</td>
          <td>8</td>
          <td class="error">FEHLER</td>
          <td>
            <span>
              <a href="synchronization-error.php">
                <i class="fas fa-list"></i>
              </a>
            </span>
          </td>
        </tr>
      </tbody>
   </table>

  </section>

</main>

<?php require_once("./src/assets/footer.php"); ?>
