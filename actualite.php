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
        * {
            font-family: Arial;
        }

        body {
            margin: 0;
        }

        .container {
            max-width: 1440px;
            background-color: rgb(246, 178, 194);
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            margin-top: 0px;
            font-size: 70px;
            text-align: center;
            color: rgb(220, 137, 81);
        }

        nav {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-end;
            align-items: stretch;
            align-content: stretch;
        }

        /* 2 règles CSS en fonction de l alargeur de l'écran > 600px */
        @media (min-width:768px) {

            .photorow {
                margin-top: 5px;
                margin-bottom: 5px;
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: stretch;
                align-content: stretch;
            }

            .menu {

                padding: 5px;
                margin: 3px;

            }

            .photo {
                box-sizing: border-box;
                margin: 20px;
                width: 32%;

            }

            .photo img {
                width: 100%;
                height: 300px;
                object-fit: cover;
                border-radius: 10px;
            }
            .legende {
            position: relative;
            top: -150px;
            color: white;
            width: auto;
            height: auto;

        }

        }
        

        /* Mobile < 600px */
        @media (max-width:768px) {

            .photorow {

                margin-top: 5px;
                margin-bottom: 5px;
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: stretch;
                align-content: stretch;
            }

            .menu {
                padding: 5px;
                margin: 3px;
            }

            .photo {
                margin: 10px;
                width: 97%;

            }

            .photo img {

                width: 100%;
                height: 300px;
                object-fit: cover;
                border-radius: 10px;
            }
        

        .legende {
            position: relative;
            top: -150px;
            color: white;
            width: auto;
            height: auto;

        }
        .foot {
                display:none;
            color: black;
        }
    }
    </style>
    <div class="container">
        <header>
            <h1>Notre actualité</h1>
            <nav>
           
                    <div class="menu"><a href="index.php">Accueil</a></div>
                    <div class="menu"><a href="service.php">Services</a></div>
                    <div class="menu"><a href="actualite.php">Actualités</a></div>
                    <div class="menu"><a href="contact.php">Contact</a></div>
                    <div class="menu"><a href="admin/login.php">login</a></div>
            </nav>
        </header>
        <main>

            <div class="photorow">
                <div class="photo">
                    <img src="img/deco_evenemnts.jpg" width="435" height="500" alt="decoration événements">
                    <div class="legende">
                        Décoration florale mariage été 2023<br> et inspiration chez votre fleuriste jardin anais à <br>Toulouse
                    </div>
                </div>
                <div class="photo">
                    <img src="img/rose_rouge.jpg" width="435" height="500" alt="rose_rouges">
                    <div class="legende">
                        Un Bouquets de roses rouges<br>à Toulouse on vous prépare votre<br>commande personalisée et on vous<br>la livre
                        à l'adresse de votre choix.
                    </div>
                    <div class="titre">
                        <h3>Réservez votre Bouquet</h3>
                    </div>

                </div>
                <div class="photo">
                    <img src="img/enterments.jpg" width="435" height="500" alt="bouquets enterments">
                    <div class="legende">
                        Composition florale<br>pour décés et enterements<br>Toulouse
                    </div>
                </div>
        </main>
        <footer>






            <div class="foot">
                Informations complémentaires mentions légales politiques de confidentialités
                <img src="img/logo_instagram.jpg" width="20">
                <img src="img/logo_facebook.jpg" width="22">



            </div>