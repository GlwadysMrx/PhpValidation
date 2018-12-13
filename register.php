<?php
require_once('./templates/header.html');
session_start();
?>

<main>
  <form class="form" action="./actions/registerAction.php" method="post">
    <label for="">Nom:</label>
    <input type="text" name="lastname" value="" placeholder="Ex:Durand" required>

    <label for="">Prénom:</label>
    <input type="text" name="firstname" value="" placeholder="Ex:Martin" required>

    <label for="">Date de Naissance :</label>
    <input type="date" name="age" value="" >

    <label for="">Mail:</label>
    <input type="email" name="mail" value="" placeholder="Ex:martin.durand@lemail.fr" required>

    <label for="">Adresse:</label>
    <input type="text" name="adress" value="" placeholder=" 134 chemin du pont">

    <label for="">Mot de passe:</label>
    <input type="text" name="surname" value="" placeholder="Ex:0000"required>

    <label for="">Confirmer le mot de passe:</label>
    <input type="text" name="surname" value="" placeholder="Ex:0000"required>

    <input type="submit" name="" value="S'inscrire">

  </form>
</main>
