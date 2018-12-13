<?php
session_start();
require_once('../templates/header.html');
?>

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <header> -->
    <main>
      <form class="form" action="exit.php" method="post">
        <?php
          if ( (!empty($_POST['firstname']) || !empty($_POST['lastname'])) || (!empty($_POST['firstname']) && !empty($_POST['lastname'])) ) {

            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];
            // $_SESSION['product_1'] = $_POST['product_1'];

            echo "Bienvenue " . $_SESSION['firstname'] . " " . $_SESSION['lastname'];

              // if($_POST['product_1'] == "Masquer") {
              //   echo "";
              // } else {
              //   echo $_POST['product_1'];
              // }

            echo "<input type='submit' value='Se Déconnecter'>";
          } else {
            echo "<a href= ../login.php> Vous devez vous identifier </a>";
          }
          ?>
      </form>
    </main>
    <!-- </header>
    <main>
      <h1>Votre Panier:</h1>

    </main>
  </body>
</html> -->
<?php
  require_once('../templates/footer.html');
?>
