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
        /*DESKTOP*/
        @media (min-width:768px) {

            .formulaire-container {
                height: 500px;

                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: center;
                align-content: center;
            }

            .formulaire {

                width: 49%;
                padding: 5px;
                height: 100%;
            }

            .adresse {
                border: solid 1px orange;
                background-color: rgb(245, 152, 70);
                width: 48%;
                height: 100%;
                text-align: center;
            }

            .formulaire-row {

                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: stretch;
                align-content: stretch;
            }

        }

        /** MOBILE */
        @media (max-width:768px) {


            .formulaire-container {
                height: 1000px;

                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: center;
                align-content: center;
                padding: 40px;
                margin: 30px;

            }

            .menu {

                display: none;
                padding: 5px;
                margin: 3px;
            }

            .formulaire {

                width: 100%;
                padding: 5px;
                height: 100%;
            }

            .adresse {
                border: solid 1px orange;

                background-color: rgb(245, 152, 70);
                width: 100%;
                height: 100%;
                text-align: center;
            }

            .formulaire-row {

                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                align-items: stretch;
                align-content: stretch;
            }

            .foot {
                display: none;
                color: black;
            }

        }






        .champs {
            width: 99%;
        }

        .zonetext {
            width: 100%;
        }
    </style>
    <div class="container">
        <header>
            <h1>Contact</h1>
            <nav>

                <div class="menu"><a href="index.php">Accueil</a></div>
                <div class="menu"><a href="service.php">Services</a></div>
                <div class="menu"><a href="actualite.php">Actualités</a></div>
                <div class="menu"><a href="contact.php">Contact</a></div>
                <div class="menu"><a href="admin/login.php">login</a></div>
            </nav>
        </header>
        <main>

            <div class="formulaire-container">
                <div class="formulaire">
                    <form id="contactForm" action="enregistrer_message.php" method="POST">
                        <div class="formulaire-row">
                            <div class="formulaire-input">
                                <label for="nom">Nom</label><br>
                                <input class="zonetext" type="text" value="" name="nom" id="nom"><br>
                            </div>
                            <div class="formulaire-input">
                                <label for="prenom">Prénom</label><br>
                                <input class="zonetext" type="text" value="" name="prenom" id="prenom"><br>
                            </div><br>
                        </div>
                        <div class="formulaire-row">
                            <div class="formulaire-input">
                                <label for="telephone">telephone</label><br>
                                <input class="zonetext" type="text" value="" name="telephone" id="telephone"><br>
                            </div>
                            <div class="formulaire-input">
                                <label for="email">email</label><br>
                                <input class="zonetext" type="text" value="" name="email" id="email"><br>
                            </div><br>
                        </div>

                        <div class="formulaire-row">
                            <div class="champs">
                                <label for="">Lieu de livraison</label><br>
                                <input class="zonetext" type="text" value="" name="lieu_de_livraison" id="lieu_de_livraison"><br>
                            </div>
                        </div>


                        <div class="formulaire-row">
                            <div class="champs">
                                <label for="date_de_livraison">date de livraison</label><br>
                                <input class="zonetext" type="date" value="" name="date_de_livraison" id="date_de_livraison"><br>
                            </div>

                        </div>
                        <div class="formulaire-row">
                            <div class="champs">
                                <label for="message">message</label><br>
                                <textarea class="zonetext" name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="champs">
                            <input type="checkbox" value="true"> En soumettant ce formulaire,j'accepte que les informations saisies soit traitées par <br>le jardin Anais
                            dans le cadre de ma demande de contact et de relation<br> commerciale qui peut en découler,en savoir plus en consultant note politique de<br>
                            confidentialitées*

                        </div>
                        <div class="champs" style="text-align:center">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>


                <div class="adresse">
                    le Jardin Anais<br>www.lejardinanais.fr<br><br>0626389460<br><br><br>Horaires d'ouverture:<br>
                    Lundi:9:00_19:00<br>Mardi:9:00_19:00<br>Mercredi:9:00_19:00<br>
                    Jeudi:9:00_19:00<br>Vendredi:9:00_19:00
                </div>



            </div>
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
            <script>
                let formulaire = document.getElementById("contactForm")

                console.log('le formulaire ici : ', formulaire)

                formulaire.addEventListener("submit", function(event) {


                    // Récupérer les valeurs des champs
                    var nom = document.getElementById("nom").value;
                    var prenom = document.getElementById("prenom").value;
                    var email = document.getElementById("email").value;
                    var message = document.getElementById("message").value;
                    var lieu_de_livraison = document.getElementById("lieu_de_livraison").value;
                    var date_de_livraison = document.getElementById("date_de_livraison").value;

                    // détection si un input n'est pas rempli
                    if (nom == "") {
                        alert("Renseignez le nom  !")
                        event.preventDefault();
                    }

                    if (prenom == "") {
                        alert("Renseignez le prenom  !")
                        event.preventDefault();
                    }
                    //soumission


                });
            </script>
</body>

</html>