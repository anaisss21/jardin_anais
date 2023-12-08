<?php
$dsn = 'mysql:host=localhost;dbname=bd_jardinanais';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);
$pdo->exec("SET CHARACTER SET utf8");
function getproduit($pdo)
{
    $sql = "SELECT * FROM tab_category INNER JOIN tab_produits ON tab_category.ID=tab_produits.ID_category;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $produit = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $produit;
    
}
$produit=getproduit($pdo);
echo "<pre>";
print_r($produit);
echo "</pre>";

