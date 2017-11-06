<?php $page_title = "Kundeninformationen | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

	<form method="get" action="">
		<div class="form-group row">
			<label for="create_client_client_name" class="col-sm-2 col-form-label">Client Name:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="create_client_client_name" placeholder="Client Name">
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_description" class="col-sm-2 col-form-label">Description:</label>
			<div class="col-sm-4">
				<textarea class="form-control" id="create_client_description" placeholder="Description" rows="3"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2">Active:</label>
			<div class="col-sm-4">
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox">
					</label>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_client_business_ref" class="col-sm-2 col-form-label">Client Business Ref:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="create_client_client_business_ref" placeholder="Client Business Ref">
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_external_id" class="col-sm-2 col-form-label">External Id:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="create_client_external_id" placeholder="External Id">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2">Is Agency:</label>
			<div class="col-sm-4">
				<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox">
				</label>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_agency_id" class="col-sm-2 col-form-label">Agency Id:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="create_client_agency_id" placeholder="Agency Id">
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_connection_type" class="col-sm-2 col-form-label">Connection Type:</label>
			<div class="col-sm-4">
				<select id="create_client_connection_type">
				  <option selected></option>
				  <option value="1">HTML</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_parent_id" class="col-sm-2 col-form-label">Parent Id:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="create_client_parent_id" placeholder="Parent Id">
			</div>
		</div>
		<div class="form-group row">
			<label for="create_client_date_created" class="col-sm-2 col-form-label">Date Created:</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" id="create_client_date_created">
			</div>
		</div>
		<div class="form-group row">
			<div class="offset-sm-2 col-sm-10">
				<button type="submit" class="btn btn-primary" id="client_edit_save">Speichern</button>
				<button type="submit" class="btn btn-secondary" id="client_edit_cancel">Abbrechen</button>
			</div>
		</div>
	</form>

</main>

<?php require_once("./src/assets/footer.php"); ?>
