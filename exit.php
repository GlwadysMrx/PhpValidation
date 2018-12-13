<?php
  session_start();
  session_destroy();
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <p>
      <?php echo "Vous avez été déconnecter avec succès !"; ?>
    </p>
    <a href="./index.php">Accueil</a>
  </body>
</html>
