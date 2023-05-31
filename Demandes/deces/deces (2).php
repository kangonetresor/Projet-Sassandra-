<?php require "./data_base_connector_deces.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["Ask"]) && !empty($_POST["Ask"])
        && isset($_POST["Ack"]) && !empty($_POST["Ack"])
        && isset($_POST["link_d"]) && !empty($_POST["link_d"])
        && isset($_POST["contact"]) && !empty($_POST["contact"])
        && isset($_POST["Date"]) && !empty($_POST["Date"])
    ) {
        $nom = $_POST["Ask"];
        $prenom = $_POST["Ack"];
        $lien = $_POST["link_d"];
        $contact  = $_POST["contact"];
        $ladate  = $_POST["Date"];
        $query = mysqli_query($connecter, "INSERT INTO id_demandeur(Nom_d, Prenom_d, Lien_parenter, contact, Date_demande) 
        VALUES ('$nom', '$prenom', '$lien', '$contact', '$ladate');");
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
            Etape 2
        </h3>
        <h1 style="text-transform: none;">
            Remplicez le formulaire pour effectuer une demande
        </h1>
    </div>

    <br><br>

    <div class="Zone_de_zone">
        <form method="post" action="">
            <div class="label_demande">
                <span>Informations du demandeur</span>
                <div class="div1">
                    <label for="nom_d" style="color: black;">Nom : &nbsp;</label>
                    <input type="text" id="nom_d" name="Ask" placeholder="Ecrivez votre Nom">
                </div>
                <div class="div1">
                    <label for="prenom_d" style="color: black;">Prenom : &nbsp;</label>
                    <input type="text" id="prenom_d" name="Ack">
                </div>
                <div class="div1">
                    <label for="lien_d" style="color: black;">Lien de parenté : &nbsp;</label>
                    <input type="text" id="lien_d" name="link_d">
                </div>
                <div class="div1">
                    <label for="phone" style="color: black;">Contact : &nbsp;</label>
                    <input type="tel" id="phone" name="contact">
                </div>
                <div class="div1">
                    <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                    <input type="date" id="Date" name="Date">
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