<?php $page_title = "Kundeninformationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Kundeninformationen</h2>

    <a href="clients.php"><button type="button" class="btn btn-sm btn-primary">Zurück</button></a>

    <br />

    <!-- Kunde-bearbeiten-Button -->
    <a href="clientedit.php"><button type="button" class="btn btn-primary">Kunden bearbeiten</button></a>

    <!-- Kunde-importieren-Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importClientModal">Kunden importieren</button>

    <!-- Kunde-exportieren-Button -->
    <button type="button" class="btn btn-primary" href="">Kunden exportieren</button>

    <!-- Kunden-importieren-Modal -->
    <div class="modal fade" id="importClientModal" tabindex="-1" role="dialog" aria-labelledby="importClientModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="importClientModalLabel">Kunden importieren</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="get" action="">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Mit aktuellem Kunden zusammenlegen
                </label>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Kunden importieren</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
            <button type="submit" class="btn btn-primary" id="modal_submit_button">Importieren</button>
          </div>
        </div>
      </div>
    </div>

  <hr />

  <!-- Kunden-Grundinformationen -->
  <section id="tabellen_kundeninformationen">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 no-padding spacer">
          <h4>Grundinformationen</h4>
          <table class="table table-striped">
            <tr>
              <td>ID:</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Name:</td>
              <td>Mediaintown</td>
            </tr>
            <tr>
              <td>Description:</td>
              <td></td>
            </tr>
            <tr>
              <td>Active:</td>
              <td></td>
            </tr>
            <tr>
              <td>Client Business Ref:</td>
              <td>JW-000047258</td>
            </tr>
            <tr>
              <td>Agency:</td>
              <td></td>
            </tr>
            <tr>
              <td>Connection Type:</td>
              <td>HTTP</td>
            </tr>
            <tr>
              <td>Parent ID:</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Parent Name:</td>
              <td>Default client</td>
            </tr>
            <tr>
              <td>Date Created:</td>
              <td>26.07.2017</td>
            </tr>
          </table>
        </div>

        <div class="col-sm-3 no-padding spacer">
          <h4>Zeitplan</h4>
          <table class="table table-striped">
            <tr>
              <td>Second:</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Minute:</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Hour:</td>
              <td>8, 10, 12, 14, 14, 16, 18</td>
            </tr>
            <tr>
              <td>Day of Month:</td>
              <td></td>
            </tr>
            <tr>
              <td>Month:</td>
              <td>*</td>
            </tr>
            <tr>
              <td>Day of Week:</td>
              <td>Mon, Tue, Wed, Thu, Fri</td>
            </tr>
            <tr>
              <td>Year:</td>
              <td>*</td>
            </tr>
            <tr>
              <td>Timezone ID:</td>
              <td>Europe/Berlin</td>
            </tr>
            <tr>
              <td>Start:</td>
              <td></td>
            </tr>
            <tr>
              <td>End:</td>
              <td></td>
            </tr>
          </table>
        </div>

        <div class="col-sm-3 no-padding">
          <h4>HTTP-Verbindung</h4>
          <table class="table table-striped">
            <tr>
              <td>URL:</td>
              <td>http://anzeigen.mediaintown.de/export/66/jobware</td>
            </tr>
            <tr>
              <td>Config:</td>
              <td>[ { "contentType": "XML", "xmlTag": "jobs", "rootContent": {"xpath": "//job", "xmlTag": "jobSet"} } ]</td>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </section>

  <hr />

  <!-- Kundeneigenschaften -->
  <section class="client-propertys">
    <h4>Eigenschaften</h4>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 no-padding">
          <table class="table table-striped">
             <thead>
                <tr>
                   <th>
                     <a rel="nofollow" href="">Property Name</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Property Label</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>Value</th>
                   <th>
                     <a rel="nofollow" href="">Property Description</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>Action</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>client.additionalBeschreibung.template</td>
                   <td>client.beschreibung.text</td>
                   <td>
                      <p>Hallo</p>
                      <p>#if ($vh.checkXPath('xml.anzeigen_titel.XPath'))</p>
                      <p>Anzeigen Titel: $vh.resolveXPath('xml.anzeigen_titel.XPath')</p>
                      <p>#end</p>
                   </td>
                   <td>&nbsp;</td>
                   <td>
                     <span>
                       <a data-toggle="modal" data-target="#propertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>client.tempate.attachment</td>
                   <td>client.tempate.attachment</td>
                   <td><a href="">Diakonie-Hasenbergl.zip(application/x-zip-compressed)</a></td>
                   <td>&nbsp;</td>
                   <td>
                     <span>
                       <a data-toggle="modal" data-target="#propertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.auftragsnummer_kunde.kontext</td>
                   <td>Unique client short name</td>
                   <td>
                      <p>diak_hasenbergl</p>
                   </td>
                   <td>&nbsp;</td>
                   <td>
                     <span>
                       <a data-toggle="modal" data-target="#propertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
             </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Eigenschaften-editieren-Modal -->
  <div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="propertyModalLabel">Eigenschaft-Dialog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="grey-area container">
            <div class="row">
              <div class="col-sm-3">
                Name:
              </div>
              <div class="col-sm-9">
                client.principal
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Label:
              </div>
              <div class="col-sm-9">
                Client Principal
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Description:
              </div>
              <div class="col-sm-9">

              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Type:
              </div>
              <div class="col-sm-9">
                String
              </div>
            </div>
          </div>
          <form method="get" action="">
            <div class="form-group row">
              <label for="xpath" class="col-sm-4 col-form-label">String Value:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="xpath" placeholder="String Value">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-primary" id="modal_submit_button">Speichern</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Kunden XPaths -->
  <section>
    <h4>XPaths</h4>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 no-padding">
          <table class="table table-striped">
             <thead>
                <tr>
                   <th>
                     <a rel="nofollow" href="">Property Name</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Property Label</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Client Label</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Required</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Ignore For Compare</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Property Type</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Xpath</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Property Description</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Date Pattern</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Script Type</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>
                     <a rel="nofollow" href="">Unescape Value</a>
                     <a rel="nofollow" href="">
                       <i class="fa fa-sort" aria-hidden="true"></i>
                     </a>
                   </th>
                   <th>Action</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td>
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
                <tr>
                   <td>xml.resource1.XPath</td>
                   <td>xml.resource1.XPath</td>
                   <td>&nbsp;</td>
                   <td><input disabled="disabled" checked="checked" name="checkbox_2" type="checkbox"></input></td>
                   <td><input disabled="disabled" name="checkbox_3" type="checkbox"></input></td>
                   <td>String</td>
                   <td>//ANZEIGE</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>Bsh</td>
                   <td><input disabled="disabled" name="checkbox_4" type="checkbox"></input></td>
                   <td class="icons-td">
                     <span>
                       <a href="debug.php">
                         <i class="fa fa-bug" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a data-toggle="modal" data-target="#newXpathPropertyModal">
                         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                       </a>
                     </span>
                     <span>
                       <a href="">
                         <i class="fa fa-trash-o" aria-hidden="true"></i>
                       </a>
                     </span>
                   </td>
                </tr>
             </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- Xpath-editieren-Modal -->
  <div class="modal fade" id="newXpathPropertyModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newClientModalLabel">Neue XPath Eigenschaft</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="grey-area container">
            <div class="row">
              <div class="col-sm-3">
                Type:
              </div>
              <div class="col-sm-9">
                String
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Name:
              </div>
              <div class="col-sm-9">
                xml.resource1.XPath
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Label:
              </div>
              <div class="col-sm-9">
                xml.resource1.XPath
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                Description:
              </div>
              <div class="col-sm-9">
              </div>
            </div>
          </div>
          <form method="get" action="">
            <div class="form-group row">
              <label class="col-sm-4">Required:</label>
              <div class="col-sm-8">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4">Ignore For Compare:</label>
              <div class="col-sm-8">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="xpath" class="col-sm-4 col-form-label">XPath:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="xpath" placeholder="XPath">
              </div>
            </div>
            <div class="form-group row">
              <label for="client_label" class="col-sm-4 col-form-label">Client Label:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="client_label" placeholder="Client Label">
              </div>
            </div>
            <div class="form-group row">
              <label for="script_type" class="col-sm-4 col-form-label">Script Type:</label>
              <div class="col-sm-4">
                <select class="custom-select" id="script_type">
                  <option selected></option>
                  <option value="1">Sed</option>
                  <option value="2">Bsh</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="script_code" class="col-sm-4 col-form-label">Script Code:</label>
              <div class="col-sm-8">
                <textarea class="form-control" id="script_code" placeholder="Script Code" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4">Unescape Value:</label>
              <div class="col-sm-8">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-primary" id="modal_submit_button">Speichern</button>
        </div>
      </div>
    </div>
  </div>

</main>

<?php require_once("./src/assets/footer.php"); ?>
