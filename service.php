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

.legende {
    position: relative;
  
    color: red;
    width: auto;
    height: auto;

}
    </style>
    <div class="container">
        <header>
            <h1>Nos services</h1>
            <nav>
            
                    <div class="menu"><a href="index.php">Accueil</a></div>
                    <div class="menu"><a href="service.php">Services</a></div>
                    <div class="menu"><a href="actualite.php">Actualités</a></div>
                    <div class="menu"><a href="contact.php">Contact</a></div>
                    <div class="menu"><a href="admin/login.php">login</a></div>
            </nav>
        </header>
        <main>
        <h2>Catégories</h2>

            <div class="photorow">
                <div class="photo">
                    <img src="img/decoration_evenements.jpg" alt="decoration événements">
                    <div class="legende">
                        Décoration événements
                    </div>
                </div>
                <div class="photo">
                    <img src="img/bouquets_fraiches.jpg" alt="decoration événements">
                    <div class="legende">
                        Bouquets de fleurs fraiches
                    </div>

                </div>
                <div class="photo">
                    <img src="img/plante.jpg" alt="decoration événements">
                    <div class="legende">
                        Plantes
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/bouquets_seches.jpg" alt="decoration événements">
                    <div class="legende">
                        Bouquets de fleurs séchées
                    </div>
                </div>
                <div class="photo">
                    <img src="img/bouquets_mariage.jpg" alt="decoration événements">
                    <div class="legende">
                        Bouquets de mariage
                    </div>
                </div>
                <div class="photo">
                    <img src="img/livraison_domicile.png" alt="decoration événements">
                    <div class="legende">
                        Livraison à domicile
                    </div>
                </div>
            </div>
            <h2>Produits</h2>


   
            <div class="photorow">
                <div class="photo">
                    <img src="img/rose_rouge.png" alt="Rose_rouge">
                    <div class="legende">
                        Rose rouge
                    </div>
                </div>
                <div class="photo">
                    <img src="img/rose.png" alt="rose">
                    <div class="legende">
                        Rose
                    </div>

                </div>
                <div class="photo">
                    <img src="img/rose_blanche.png" alt="rose_blanche">
                    <div class="legende">
                        Rose blanche
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/plante_grimpante.png" alt="plante_grimpante">
                    <div class="legende">
                    Plante grimpante
                    </div>
                </div>
                <div class="photo">
                    <img src="img/plante_grasse.png" alt="plante_grasse">
                    <div class="legende">
                        Plante grasse
                    </div>

                </div>
                <div class="photo">
                    <img src="img/palmier.png" alt="palmier">
                    <div class="legende">
                        Palmier
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/tulipe.png" alt="tulipe">
                    <div class="legende">
                        Tulipe
                    </div>
                </div>
                <div class="photo">
                    <img src="img/orchidee.png" alt="orchidee">
                    <div class="legende">
                        Orchidée
                    </div>

                </div>
                <div class="photo">
                    <img src="img/marguerite.png" alt="marguerite">
                    <div class="legende">
                        Marguerite
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/muguet.png" alt="muguet">
                    <div class="legende">
                        Muguet
                    </div>
                </div>
                <div class="photo">
                    <img src="img/bouquet_enterment.png" alt="bouquet_enterment">
                    <div class="legende">
                        Bouquet enterment et deuil
                    </div>

                </div>
                <div class="photo">
                    <img src="img/bouquet_fleurseche.png" alt="bouquet_fleurseche">
                    <div class="legende">
                        Bouquet fleur séches
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/bouquets_fraiches.png" alt="bouquet_fleurfaiche">
                    <div class="legende">
                        Bouquet fleur fraiche
                    </div>
                </div>
                <div class="photo">
                    <img src="img/bouquet_mariage.png" alt="bouquet_mariage">
                    <div class="legende">
                        Bouquet mariage
                    </div>

                </div>
                <div class="photo">
                    <img src="img/deco_mariage.png" alt="deco_mariage">
                    <div class="legende">
                        Décoration mariage
                    </div>
                </div>
            </div>
            <div class="photorow">
                <div class="photo">
                    <img src="img/deco_evenement_travail.png" alt="deco_evenement_travail">
                    <div class="legende">
                        Décoration événements Travail
                    </div>
                </div>
                <div class="photo">
                    <img src="img/deco_naissance.png" alt="deco_naissance">
                    <div class="legende">
                        décoration naissance
                    </div>

                </div>
                <div class="photo">
                    <img src="img/deco_celebration.png" alt="deco_celebration">
                    <div class="legende">
                        décoration célébration
                    </div>
                </div>
            </div>
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

            $produit = getproduit($pdo);


            for ($i = 0; $i < count($produit); $i++) {
                if ($i % 3 == 0) {
                    echo '<div class="photorow">';
                }

                echo '
                        <div class="photo">
                        <img src="img/' . $produit[$i]['image'] . '" />
                       <div class="legende">'
                    . $produit[$i]['nom'] . $produit[$i]['prix'] .
                    '</div>
                   </div>';

                if (($i + 1) % 3 == 0) {
                    echo '</div>';
                }
            }




            ?>
 <
                      
        </main>
        <footer>
            <div class="logo">
                <div>

                </div>

            </div>
            <div class="foot">Informations complémentaires
                mentions légales politiques de confidentialités
                <img src="img/logo_instagram.jpg" width="20">
                <img src="img/logo_facebook.jpg" width="22">

            </div>