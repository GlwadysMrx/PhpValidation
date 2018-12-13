<?php
require_once('./templates/header.html');
?>

<main>
  <form class="" action="./actions/loginAction.php" method="POST">

        <label for="">Doliprane:</label>
        <select name="product_1">
          <option>Supprimer</option>
          <option>Ajouter au panier</option>
        </select>

        <label for="">Spasfond:</label>
        <select name="product_2">
          <option>Supprimer</option>
          <option>Ajouter au panier</option>
        </select>

        <label for="">Nurofène:</label>
        <select name="product_3">
          <option>Supprimer</option>
          <option>Ajouter au panier</option>
        </select>

        <input type="submit" name="save" value="Valider">
</main>
