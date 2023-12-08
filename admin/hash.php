<?php

// hashage d'un mot de passe
$motdepasse = "123";

$hash = password_hash($motdepasse, PASSWORD_DEFAULT);
//echo $hash;
// vérification du mot de passe soumis au formulaire
$hash_bdd = "$2y$10$3R2PmLojcq1SoH1MprhHbOyXfVu1vAand.Td4XO7bv0.JP38LfPFa";
$resultat = password_verify("123", $hash_bdd);
if ($resultat == 1) {
    echo "mot de passe correct, vous êtes connecté";
} else {
    echo "mot de passe incorrect, recommencez";
}

// requêtes SQL sélectionner l'utilisateur et le mot de passe hashé