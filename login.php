<?php $page_title = "Login | Jarvis" ?>
<?php require_once("src/assets/head.php"); ?>

<!-- Navigation -->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-faded" style="background-color: #122e45;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="./src/img/Jobware-Logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo von Jobware Online-Service GmbH">
    Jarvis
  </a>
</nav>

<!-- Login-Area -->
<div class="container content">
  <div class="jumbotron">
    <h1>Anmelden</h1>
    <p class="lead">Bitte melde dich mit deinen Zugangsdaten an, um in Jarvis zu arbeiten.</p>
    <hr>
    <p class="lead">
      <form method="post" action="">
        <div class="form-group row">
          <label for="login_username" class="col-sm-2 col-form-label">Benutzername:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="login_username" placeholder="Benutzername">
          </div>
        </div>
        <div class="form-group row">
          <label for="login_password" class="col-sm-2 col-form-label">Passwort:</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="login_password" placeholder="Passwort">
          </div>
        </div>
      </form>
    </p>
  </div>
</div>

<?php require_once("./src/assets/footer.php"); ?>
