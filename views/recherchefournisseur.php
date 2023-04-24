<?php
require_once '../Controller/FournisseurC.php';


// Vérifie si la recherche a été soumise
if(isset($_GET['recherche'])) {
  $recherche = $_GET['recherche'];
  $pdo = config::getConnexion();
  $fournisseurC = new FournisseurC();
  $resultats = $fournisseurC->rechercherFournisseur($recherche, $pdo);
}
?>

<!-- Affichage des résultats de recherche -->
<?php if(isset($resultats)) : ?>
  <h2>Résultats de recherche</h2>
  <?php if(empty($resultats)) : ?>
    <p>Aucun résultat trouvé.</p>
  <?php else : ?>
    <ul>
      <?php foreach($resultats as $fournisseur) : ?>
        <li><?= $fournisseur['nom'] ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
<?php endif; ?>

<!-- Formulaire de recherche -->
<form method="GET" action="">
  <label for="recherche">Recherche :</label>
  <input type="text" name="recherche" id="recherche" required>
  <button type="submit">Rechercher</button>
</form>
