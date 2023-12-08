<?php
session_start();


// listerles message des clients
if (!isset($_SESSION['email'])) {
    echo "vous n'etes pas autorisé à entrer sur cette page";
    header('Location: login.php');
} else {
    echo "vous etes autorisé à entrer sur cette page";
}
$dsn = 'mysql:host=localhost;dbname=bd_jardinanais';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);
$pdo->exec("SET CHARACTER SET utf8");

function getMessage($pdo)
{

    $sql = "SELECT * FROM tab_message";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $message = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $message;
}
$message = getMessage($pdo);
// echo "<pre>";
// print_r($message);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Fleuriste Toulouse- Jardin Anais</title>
</head>


<body>

    <style>
        .matable {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr th {
            border: 1px solid black;
        }

        tr td {
            border: 1px solid black;
        }
    </style>

    <div class="container">
        <a href="logout.php">se déconnecter</a>
    <h1>Messages de Contact</h1>
        <table class="matable">
            <tr>
                <th>Id</th>
                <th>Nom </th>
                <th>Prenom</th>
                <th>Tél</th>
                <th>email</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>message</th>

            </tr>

            <?php
            
        
      if (!empty($message)) {
        for ($i = 0; $i < count($message); $i++) {
            echo "<tr>";
            echo "<td>". $message[$i]['ID'] . "</td>";;
            echo "<td>". $message[$i]['nom'] . "</td>";
            echo "<td>".$message[$i]['prenom'] . "</td>";
            echo "<td>". $message[$i]['telephone'] . "</td>";
            echo "<td>" . $message[$i]['email'] . "</td>";
            echo "<td>" . $message[$i]['lieu_de_livraison'] ."</td>";
            echo "<td>". $message[$i]['date_de_livraison'] ."</td>";
            echo "<td>". $message[$i]['message'] ."</td>";
            echo "</tr>";
        }

     }
     else {
        echo '<p>Aucun message de contact trouvé.</p>';
    }
    ?>



        
        

        
            </table>

    </div>

</body>

</html>