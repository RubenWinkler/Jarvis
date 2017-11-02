<?php $page_title = "Debug | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>
<?php require_once("src/assets/navbar.php"); ?>

<!-- Hauptbereich -->
<main class="container-fluid">

<h2>Debug</h2>

<div class="row">
	<div class="col-sm-1">
	  Client:
	</div>
	<div class="col-sm-11">
	  <a href="">Diakonie Hasenbergl e.V.</a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="html_textarea" class="col-form-label">Source:</label>
			<textarea class="form-control" id="html_textarea" placeholder="Source" rows="3"></textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<input type="text" class="form-control" id="xpath_input" placeholder="XPath">
	</div>
	<div class="col-sm-9">
		<button type="submit" class="btn btn-primary" id="modal_submit_button">XPath speichern</button>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="script_textarea" class="col-form-label">Skript:</label>
			<textarea class="form-control" id="script_textarea" placeholder="Skript" rows="3"></textarea>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-sm-12">
	<button type="submit" class="btn btn-primary" id="modal_submit_button">Ausführen</button>
  </div>
</div>

</main>

<?php require_once("./src/assets/footer.php"); ?>
