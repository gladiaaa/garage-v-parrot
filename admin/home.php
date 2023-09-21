<?php
  session_start();
  // Vérifiez si l'utilisateur est connecté
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="../css/admin.css" />
    </head>
    <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    <div>
      <img href="../images/LogoP.png">
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
      <li>Accueil</li>
      <li><a class="hover-underline-animation" href="occasion.php">Occasion</li>
      <li><a class="hover-underline-animation" href="reparation.php">Réparation</li>
      <li><a class="hover-underline-animation" href="a-propos">A propos</li>
      <li><a class="hover-underline-animation" href="userGestion.php">Espace Admin</li>
    </ul>
  </section>
  <section>
    <div>
    <h1>L'heure d'ouverture est : <?php echo $heureOuverture; ?></h1>
    <h1> L'heure de fermeture est :<?php $heureFermeture; ?></h1>
    </div>
      </section>
      <section>
        <div>
          <a href="test.php">menu test</a>
        </div>
      </section>

      <?php foreach ($Produits as $unProduit): ?>
  <div class="col">
    <div class="card shadow-sm">
        <title><?= $unProduit->nom ?></title>
        <img src="<?= $unProduit->image ?>">

      <div class="card-body">
        <p class="card-text"><?= substr($unProduit->description, 0 , 250) ?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-muted"><?= $unProduit->prix ?>€</small>
          <small class="text-muted"><?= $unProduit->km ?>km</small>
          <small class="text-muted"><?= $unProduit->annee ?></small>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</body>
</html>
