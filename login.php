<?php
session_start();
require_once('./templates/header.html');
?>

<main>
  <form class="form" action="./actions/loginAction.php" method="post">

    <label for="">Nom:</label>
    <input type="text" name="lastname" value="" placeholder="Ex:Durand"required>

    <label for="">Prénom:</label>
    <input type="text" name="firstname" value="" placeholder="Ex:Martin"required>

    <label for="">Mot de passe:</label>
    <input type="text" name="mdp" value="" placeholder="Ex:0000" required>

    <input type="submit" name="" value="Se connecter">

  </form>
</main>
