<?php
require("admin/config/commande.php");

$minPrice = $_POST['minPrice'];
$maxPrice = $_POST['maxPrice'];

$Produits = filterProductsByPrice($minPrice, $maxPrice);

foreach ($Produits as $unProduit) {
    // Générez le code HTML pour chaque produit ici
    echo "<div class='product'>";
    echo "<h2>{$unProduit->nom}</h2>";
    echo "<p>{$unProduit->description}</p>";
    echo "<p>Prix: {$unProduit->prix}€</p>";
    echo "</div>";
}
?>