<?php
session_start();
$user_name = "Jan";
$user_pass = "Macholl";

//login Funktionen
//post variablen einfach speichern
$user = $_POST['user'];
$pw = $_POST['pw'];

//nun kommen die if abfragen die das ganze relativ sicher machen
if (isset($user, $pw))
    {
    if ($user == "" OR $pw == "")
        {
        echo "<b>Bittefülle beide Felder aus!</b>";
        }
        elseif ($user == $user_name AND $pw == $user_pass)
            {
            $_SESSION['user'] = $user;
            $_SESSION['pw'] = $pw;
            header('Location: home.php');
            }elseif($user != $user_name AND $pw != $user_pass){
			echo("MÄPPPPP");}
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          		<?php if (!isset($user, $pw)){
    echo '<form name="login" method="post" action="'.$_SERVER['PHP_SELF'].'">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="user" name="user" class="form-control" placeholder="Benutzer" required="required" autofocus="autofocus">
                <label for="user">Benutzer</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="pw" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Passwort</label>
              </div>
            </div>
            <input class=btn btn-primary btn-block type="submit" name="Submit" value="Login" ></input>
          </form>';} ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
