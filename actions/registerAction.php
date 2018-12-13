<?php
require_once('./templates/header.html');
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <header>
      <form class="" action="exit.php" method="post">
        <?php
          if ( (!empty($_POST['firstname']) || !empty($_POST['lastname'])) || (!empty($_POST['firstname']) && !empty($_POST['lastname'])) ) {

            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];

            echo "Bienvenue " . $_SESSION['firstname'] . " " . $_SESSION['lastname'];
            echo "<input type='submit' value='Se Déconnecter'>";
          } else {
            echo "<a href= ./register.php> Vous devez vous identifier </a>";
          }
          ?>
      </form>
    </header>
  </body>
</html>
