<?php require "./data_base_connector_mariage.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["date_mariage"]) && !empty($_POST["date_mariage"])
        && isset($_POST["nom_mairie"]) && !empty($_POST["nom_mairie"])
        && isset($_POST["nom_epous"]) && !empty($_POST["nom_epous"])
        && isset($_POST["prenom_epous"]) && !empty($_POST["prenom_epous"])
        && isset($_POST["nom_epouse"]) && !empty($_POST["nom_epouse"])
        && isset($_POST["prenom_epouse"]) && !empty($_POST["prenom_epouse"])
        && isset($_POST["regime"]) && !empty($_POST["regime"])
    ) {
        $date = $_POST["date_mariage"];
        $nom_mairie = $_POST["nom_mairie"];
        $nom_epous = $_POST["nom_epous"];
        $prenom_epous = $_POST["prenom_epous"];
        $nom_epouse = $_POST["nom_epouse"];
        $prenom_epouse = $_POST["prenom_epouse"];
        $regime = $_POST["regime"];
        $query = mysqli_query($connecter, "INSERT INTO infos_generales (date_mariage, nom_mairie, nom_epous, prenom_epous, nom_epouse, prenom_epouse, regime_matrimoniale) 
        VALUES ('$date', '$nom_mairie', '$nom_epous','$prenom_epous', '$nom_epouse', '$prenom_epouse', '$regime');");
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Demande d'Acte de Mariage</title>
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


    <div class="acteMarg">
        <h2 class="img2">
            <p class="paragraphmariage">Acte de mariage</p>
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
                <span>Informations du mariage</span>
                <div class="div1">
                    <label for="date_mariage" style="color: black;">Date de mariage : &nbsp;</label>
                    <input type="date" id="" name="date_mariage" placeholder="Ecrivez la date de mariage">
                </div>
                <div class="div1">
                    <label for="nom_mairie" style="color: black;">Nom de la Mairie : &nbsp;</label>
                    <input type="text" id="" name="nom_mairie">
                </div>
                <div class="div1">
                    <label for="nom_epous" style="color: black;">Nom de l'epous : &nbsp;</label>
                    <input type="text" id="" name="nom_epous">
                </div>
                <div class="div1">
                    <label for="prenom_epous" style="color: black;">Prenom de l'epous : &nbsp;</label>
                    <input type="text" id="" name="prenom_epous">
                </div>
                <div class="div1">
                    <label for="nom_epouse" style="color: black;">Nom de l'epouse : &nbsp;</label>
                    <input type="text" id="" name="nom_epouse">
                </div>
                <div class="div1">
                    <label for="prenom_epouse" style="color: black;">Prenom de l'epouse : &nbsp;</label>
                    <input type="text" id="" name="prenom_epouse">
                </div>
                <div class="div1">
                    <label for="regime" style="color: black;">Regime Matrimonial : &nbsp;</label>
                    <input type="text" id="" name="regime">
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
        <a href="../mariage/mariage (2).php"> Etape Suivante </a>
    </div>

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