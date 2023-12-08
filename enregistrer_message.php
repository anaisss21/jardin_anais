<?php

$sql = "INSERT INTO message ....";

// Assurez-vous de remplacer ces valeurs par les vôtres
$dsn = 'mysql:host=localhost;dbname=bd_jardinanais';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);
$pdo->exec("SET CHARACTER SET utf8");



// Récupérer les données du formulaire
$name = $_POST['nom'];
$username = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$lieulivraison = $_POST['lieu_de_livraison'];
$datelivraison = $_POST['date_de_livraison'];
$message = $_POST['message'];



$message = [
    'nom' => $_POST['nom'],
    'prenom' =>  $_POST['prenom'],
    'telephone' => $_POST['telephone'],
    'email' => $_POST['email'],
    'lieu_de_livraison' => $_POST['lieu_de_livraison'],
    'date_de_livraison' => $_POST['date_de_livraison'],
    'message' => $_POST['message'],
];

// Préparer la requête SQL pour insérer dans la table "message"

// Exécuter la requête SQL
function insert_message($pdo, $message)
{
    $sql = "INSERT INTO tab_message (nom,prenom,telephone,email,lieu_de_livraison,date_de_livraison,message) 
    VALUES (:nom, :prenom,:telephone,:email,:lieu_de_livraison,:date_de_livraison,:message);";

    $stmt = $pdo->prepare($sql);
    $params = [
        ':nom' => $message['nom'],
        ':prenom' => $message['prenom'],
        ':telephone' => $message['telephone'],
        ':email' => $message['email'],
        ':lieu_de_livraison' => $message['lieu_de_livraison'],
        ':date_de_livraison' => $message['date_de_livraison'],
        ':message' => $message['message']
    ];

    $resultat = $stmt->execute($params);


    return $resultat;
}
insert_message($pdo, $message);
