<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=bd_jardinanais';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);
$pdo->exec("SET CHARACTER SET utf8");

function getconnexion($pdo, $utilisateur, $motdpass)
{
    $sql = "SELECT ID,utilisateur,mot_de_pass FROM tab_user 
    WHERE utilisateur=:utilisateur";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':utilisateur', $utilisateur, PDO::PARAM_STR);
    $stmt->execute();
    $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if ($utilisateur) {
        // Vérifier le mot de passe en utilisant password_verify
        if (password_verify($motdpass, $utilisateur[0]['mot_de_pass'])) {
            // Mot de passe correct, l'utilisateur est connecté
            echo "Mot de passe correct, connexion réussie pour l'utilisateur avec l'ID " . $utilisateur[0]['ID'];

            $_SESSION['email'] = $utilisateur[0]['utilisateur'];
        } else {
            // Mot de passe incorrect, afficher un message d'erreur
            echo "Mot de passe incorrect";
        }
    } else {
        // Utilisateur non trouvé, afficher un message d'erreur
        echo "Utilisateur non trouvé";
    }
}


if (isset($_POST) && count($_POST) > 0) {

    $email = $_POST['utilisateur'];
    $motdpass = $_POST['password'];

    echo 'email : ' . $email;
    getconnexion($pdo, $email, $motdpass);
    // redirige vers la page index.php
    header('Location: index.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Login Page</title>
    </head>

    <body>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #f4f4f4;
            }
            

            
            .login-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-bottom: 8px;
            }

            input {
                padding: 10px;
                margin-bottom: 16px;
            }

            button {
                background-color: #4caf50;
                color: #fff;
                padding: 10px;
                border: none;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>

        <div class="login-container">

        <header>
          
            <nav>

                <div class="menu"><a href="../index.php">Accueil</a></div>
                <div class="menu"><a href="../service.php">Services</a></div>
                <div class="menu"><a href="../actualite.php">Actualités</a></div>
                <div class="menu"><a href="../contact.php">Contact</a></div>
              
            </nav>
        </header>

            <form id="login" method="POST" action="login.php">
                <h2>Login</h2>

                <label for="username">utilisateur:</label>
                <input type="text" id="utilisateur" name="utilisateur" required>

                <label for="password">mot de passe:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">soumettre</button>
            </form>
        </div>

        <script src="script.js">
            document.getElementById("loginForm").addEventListener("submit", function(event) {
                event.preventDefault();

                // Vous pouvez ajouter ici la logique pour vérifier les informations de connexion.
                // Par exemple, vérifier les données par rapport à une base de données ou des informations en dur.

                var username = document.getElementById("utilisateur").value;
                var password = document.getElementById("password").value;

                // Exemple de vérification simple
                if (username === "utilisateur" && password === "motdepasse") {
                    alert("Connexion réussie!");
                } else {
                    alert("Identifiants incorrects. Veuillez réessayer.");
                }
            });
        </script>
    </body>

    </html>

<?php
}
?>