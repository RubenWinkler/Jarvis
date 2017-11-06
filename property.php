<?php $page_title = "Eigenschaften | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

  <h2>Eigenschaften</h2>

  <!-- Neue-Eigenschaft-erstellen-Button -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPropertyModal">Neue Eigenschaft erstellen</button>

  <!-- Neue-Eigenschaft-erstellen-Modal -->
  <div class="modal fade" id="newPropertyModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newPropertyModalLabel">Neue Eigenschaft erstellen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="get" action="">
            <div class="form-group row">
              <label for="create_property_name" class="col-sm-4 col-form-label">Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="create_property_name" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="create_property_label" class="col-sm-4 col-form-label">Label:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="create_property_label" placeholder="Label">
              </div>
            </div>
            <div class="form-group row">
              <label for="create_client_type" class="col-sm-4 col-form-label">Type:</label>
              <div class="col-sm-4">
                <select class="custom-select" id="create_property_type">
                  <option selected value="1">String</option>
                  <option value="2">Text</option>
                  <option value="3">Template</option>
                  <option value="4">Password</option>
                  <option value="5">Long</option>
                  <option value="6">Boolean</option>
                  <option value="7">Date</option>
                  <option value="8">Attachment</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="create_property_description" class="col-sm-4 col-form-label">Description:</label>
              <div class="col-sm-8">
                <textarea class="form-control" id="create_property_description" placeholder="Description" rows="3"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
          <button type="submit" class="btn btn-primary" id="modal_submit_button">Erstellen</button>
        </div>
      </div>
    </div>
  </div>

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

  <!-- Eigenschaftentabelle -->
  <section>

    <table class="table table-striped">
       <thead>
          <tr>
             <th>
               <a rel="nofollow" href="">ID</a>
               <a rel="nofollow" href=""></a>
             </th>
             <th>
               <a rel="nofollow" href="">Label</a>
               <a rel="nofollow" href=""></a>
             </th>
             <th>
               <a rel="nofollow" href="">Name</a>
               <a rel="nofollow" href=""></a>
             </th>
             <th>
               <a rel="nofollow" href="">Type</a>
               <a rel="nofollow" href=""></a>
             </th>
             <th>
               <a rel="nofollow" href="">Description</a>
               <a rel="nofollow" href=""></a>
             </th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
             <td>11</td>
             <td>Unique client short name</td>
             <td>xml.auftragsnummer_kunde.kontext</td>
             <td>String</td>
             <td>&nbsp;</td>
             <td>
               <span>
                 <a href="">
                   <i class="fa fa-eye" aria-hidden="true"></i>
                 </a>
               </span>
               <span>
                 <a href="">
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
