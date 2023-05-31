<?php require "./data_base_connector_deces.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["date_deces"]) && !empty($_POST["date_deces"])
        && isset($_POST["nom_p_decedee"]) && !empty($_POST["nom_p_decedee"])
        && isset($_POST["prenom_p_decedee"]) && !empty($_POST["prenom_p_decedee"])
        && isset($_POST["nom_pere"]) && !empty($_POST["nom_pere"])
        && isset($_POST["prenom_pere"]) && !empty($_POST["prenom_pere"])
        && isset($_POST["nom_mere"]) && !empty($_POST["nom_mere"])
        && isset($_POST["prenom_mere"]) && !empty($_POST["prenom_mere"])
    ) {
        $ladate = $_POST["date_deces"];
        $nom_d = $_POST["nom_p_decedee"];
        $prenom_d = $_POST["prenom_p_decedee"];
        $nom_pere  = $_POST["nom_pere"];
        $prenom_pere = $_POST["prenom_pere"];
        $nom_mere  = $_POST["nom_mere"];
        $prenom_mere  = $_POST["prenom_mere"];
        $query = mysqli_query($connecter, "INSERT INTO infos_deces(ladate, Nom_decede, prenoom_decede, Nom_pere, prenom_pere, Nom_mere, prenom_mere) 
        VALUES ('$ladate', '$nom_d', '$prenom_d', '$nom_pere', '$prenom_pere', '$nom_mere', '$prenom_mere');");
    }
}

?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Acte de Décès</title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">
</head>

<body>

    <nav>
        <a href="../../index1.html" class="logo"> <img src="../../images/logosassandra.png">&nbsp; Mairie de Sassandra | Etat Civil</a>

        <ul>
            <li><a href="../../index2.html" class="bouton-actif"> Voir Sassandra</a></li>
        </ul>
    </nav>

    <div class="acteDeces">
        <h2 class="img3">
            <p class="paragraphdeces">Acte de décès</p>
        </h2>
    </div>

    <div class="titre">
        <h3>
            Etape 1
        </h3>
        <h1 style="text-transform: none;">
            Remplicez le formulaire pour effectuer une demande
        </h1>
    </div>

    <br><br>

    <div class="Zone_de_zone">
        <form method="post" action="">
            <div class="label_demande">
                <span>Informations de la personne décédée</span>
                <div class="div1">
                    <label for="date_deces" style="color: black;">Date du décès : &nbsp;</label>
                    <input type="date" id="" name="date_deces" placeholder="Ecrivez la date du décès">
                </div>
                <div class="div1">
                    <label for="nom_p_decedee" style="color: black;">Nom de la personne dont vous demandez l'axcte : &nbsp;</label>
                    <input type="text" id="" name="nom_p_decedee">
                </div>
                <div class="div1">
                    <label for="prenom_p_decedee" style="color: black;">Prenom de la personne dont vous demandez l'axcte : &nbsp;</label>
                    <input type="text" id="" name="prenom_p_decedee">
                </div>
                <!-- <div class="div1">
                    <label for="prenom_epous" style="color: black;">Sexe : &nbsp;</label>
                    <div class="div1">
                        <input type="radio" id="sexe_m" name="sexe_m" value="masculin">
                        <label for="sexe_m">Masculin</label>

                        <input type="radio" id="sexe_f" name="sexe_f" value="feminin">
                        <label for="sexe_f">Feminin</label>
                    </div>
                </div> -->
                <span>Identite des parents</span>
                <div class="div1">
                    <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                    <input type="text" id="" name="nom_pere">
                </div>
                <div class="div1">
                    <label for="prenom_pere" style="color: black;">Prenom du mère : &nbsp;</label>
                    <input type="text" id="" name="prenom_pere">
                </div>
                <div class="div1">
                    <label for="nom_mere" style="color: black;">Nom de la mère : &nbsp;</label>
                    <input type="text" id="" name="nom_mere">
                </div>
                <div class="div1">
                    <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                    <input type="text" id="" name="prenom_mere">
                </div>
                <div>
                    <button type="submit">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>





    <br>
    <div>
        <a href="./deces (2).php">Etape Suivante </a>
    </div>









    <br>

    <!-- <div>
        <a href="../mariage/mariage (2).php" target="_blank"> Etape Suivante </a>
    </div> -->

    <br><br><br><br><br>
    <div id="contactez-nous">

        <ul class="Moy-contact">
            <li>
                <h2>Contactez nous par mail</h2>
            </li>
            <li><a href="mailto:zahkangone@gmail.com">En Cliquant Ici &nbsp;<img src="../../images/icones/gmail-logo-24.png" alt=""></a></li>
        </ul>

        <div class="Moy-contact">
            <h2>Nos Reseaux</h2>
            <ul>
                <li> <a href="https://www.facebook.com/marie.sassandra.75/" target="_blank">Facebook &nbsp;<img src="../../images/icones/facebook-square-logo-24.png" alt=""></a></li>
                <li> <a href="">Twitter &nbsp;<img src="../../images/icones/twitter-logo-24.png" alt=""></a></li>
                <li> <a href="https://www.youtube.com/watch?v=s3JXvtsGNBw" target="_blank">Youtube &nbsp;<img src="../../images/icones/youtube-logo-24.png" alt=""></a></li>
            </ul>
        </div>

    </div>


    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>

</body>

</html>