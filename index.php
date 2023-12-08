<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleuriste Toulouse- Jardin Anais</title>
</head>

<body>


    <style>
        /** MOBILE */
        @media (max-width:768px) {
            main {
                border: black 1px solid;
                height: 800px;
                width: 100%;
                background-image: url("img/photo_accueil.jpg");
                background-size: cover;
                position: relative;
                border: 1px solid;
                background-position: 50% 50%;
                background-repeat: no-repeat;
            }


            h1.desktop {
                display: none;
            }

            h1.mobile {
                display: block;
                text-align: center;
                color: black;
                font-size: 20px;
            }

            .container {
                height: 1000px;
                background-color: rgb(246, 178, 194);
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: center;
                align-content: center;
            }

            .coordonnees {
                display: none;
                margin: 10px;
                padding: 20px;

            }

            .menu {

                display: none;
                padding: 5px;
                margin: 3px;
            }


            .foot_mobile {
                display: block;
                text-align: center;
                color: black;

            }

            .foot {
                display: none;
                color: black;
            }


        }



        /**desktop */

        @media (min-width:768px) {

            .container {
                border: black 1px solid;
                height: 1000px;
                background-image: url("img/photo_accueil.jpg");
                background-size: cover;
                position: relative;
                border: 1px solid;
                background-repeat: no-repeat;
            }

            h1.desktop {
                display: block;
                color: white;
                font-size: 65px;
                text-align: center;
            }


            h1.mobile {
                display: none;

            }

            .coordonnees {
                margin: 10px;
                padding: 20px;

            }

            .foot_mobile {
                display: none;
            }

            .foot {

                color: white;
            }

            .logo {
                display: flex;
                flex-direction: row-reverse;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: flex-end;
                align-content: flex-start;
            }
        }

        header {

            color: white
        }


        .menu_container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-end;
            align-items: stretch;
            align-content: stretch;
        }

        .coordonnees {
            margin: 10px;
            padding: 20px;

        }

        .menu a {
            padding: 5px;
            margin: 3px;
            text-decoration: none;
            color: white;
        }

        main {
            height: 800px;
        }

        .foot {
            color: white;
        }

        .logo {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-end;
            align-content: flex-start;
        }
    </style>
    <div class="container">
        <header>
        <nav>
                <div class="menu_container">
                    <div class="coordonnees">tel0626389460</div>
                    <div class="coordonnees">www.lejardinanais.fr</div>
                </div>
                <div class="menu_container">
                    <div class="menu"><a href="index.php">Accueil</a></div>
                    <div class="menu"><a href="service.php">Services</a></div>
                    <div class="menu"><a href="actualite.php">Actualités</a></div>
                    <div class="menu"><a href="contact.php">Contact</a></div>
                    <?php
                    if( !isset($_SESSION['email'])){
                     echo'   <div class="menu"><a href="admin/login.php">login</a></div>';
                    }
                    else{
                        echo'   <div class="menu"><a href="admin/logout.php">logout</a></div>';
                    }
                    ?>
                   
                </div>


            </nav>
            <h1 class="mobile"> JARDIN ANAIS <br>
                LIVRAISON DE FLEURS SUR TOULOUSE ET <br>PROCHE BANLIEUE
            </h1>

        </header>
        <main>
            <h1 class="desktop"> JARDIN ANAIS <br>
                LIVRAISON DE FLEURS SUR TOULOUSE ET <br>PROCHE BANLIEUE
            </h1>
           


        </main>
        <footer>
            <div class="foot_mobile"> Jardin Anais<br> plantes et bouquets de
                fleurs livraison à domicile<br>Contactez-nous<br>www.lejardinanais.fr<br><br>0626389460
            </div>
            <div class="foot">
                Informations complémentaires
                mentions légales politiques de confidentialités
                <img src="img/logo_instagram.jpg" width="20">
                <img src="img/logo_facebook.jpg" width="22">

            </div>






        </footer>
    </div>