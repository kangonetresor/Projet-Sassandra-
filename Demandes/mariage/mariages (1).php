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
        && isset($_POST["nom_demandeur"]) && !empty($_POST["nom_demandeur"])
        && isset($_POST["prenom_demandeur"]) && !empty($_POST["prenom_demandeur"])
        && isset($_POST["date_demande"]) && !empty($_POST["date_demande"])
        && isset($_POST["num_demandeur"]) && !empty($_POST["num_demandeur"])
        && isset($_POST["ville_demandeur"]) && !empty($_POST["ville_demandeur"])
        && isset($_POST["lien_avec_epous"]) && !empty($_POST["lien_avec_epous"])
    ) {
        $date = htmlspecialchars($_POST["date_mariage"]);
        $nom_mairie = htmlspecialchars($_POST["nom_mairie"]);
        $nom_epous = htmlspecialchars($_POST["nom_epous"]);
        $prenom_epous = htmlspecialchars($_POST["prenom_epous"]);
        $nom_epouse = htmlspecialchars($_POST["nom_epouse"]);
        $prenom_epouse = htmlspecialchars($_POST["prenom_epouse"]);
        $regime = htmlspecialchars($_POST["regime"]);
        $nom_demandeur = htmlspecialchars($_POST["nom_demandeur"]);
        $prenom_demandeur = htmlspecialchars($_POST["prenom_demandeur"]);
        $date_demande = htmlspecialchars($_POST["date_demande"]);
        $num_demandeur = htmlspecialchars($_POST["num_demandeur"]);
        $ville_demandeur = htmlspecialchars($_POST["ville_demandeur"]);
        $liens = htmlspecialchars($_POST["lien_avec_epous"]);
        $query = mysqli_query($connecter, "INSERT INTO mariage (date_mariage, nom_mairie, nom_epous, prenom_epous, nom_epouse, prenom_epouse, regime_matrimoniale, nom_demandeur, prenom_demandeur, date_demande, telephone, ville, lien_avec_epous) 
        VALUES ('$date', '$nom_mairie', '$nom_epous','$prenom_epous', '$nom_epouse', '$prenom_epouse', '$regime', '$nom_demandeur', '$prenom_demandeur', '$date_demande', '$num_demandeur', '$ville_demandeur', '$liens');");

        header("Location:remerciement.php");
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
        <h1 style="text-transform: none;">
            <em> Remplicez le formulaire pour effectuer une demande </em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action="">

            <span>Informations du mariage</span>
            <div class="div1">
                <label for="date_mariage" style="color: black;">Date de mariage : &nbsp;</label>
                <input type="date" id="" name="date_mariage" placeholder="Ecrivez la date du mariage">
            </div>
            <div class="div1">
                <label for="nom_mairie" style="color: black;">Nom de la Mairie : &nbsp;</label>
                <input type="text" id="" name="nom_mairie" placeholder="Donner le nom de la mairie">
            </div>
            <div class="div1">
                <label for="nom_epous" style="color: black;">Nom de l'epous : &nbsp;</label>
                <input type="text" id="" name="nom_epous" placeholder="Donner le nom du marié">
            </div>
            <div class="div1">
                <label for="prenom_epous" style="color: black;">Prenom de l'epous : &nbsp;</label>
                <input type="text" id="" name="prenom_epous" placeholder="Donner le prenom du marié">
            </div>
            <div class="div1">
                <label for="nom_epouse" style="color: black;">Nom de l'epouse : &nbsp;</label>
                <input type="text" id="" name="nom_epouse" placeholder="Donner le nom de la mariée">
            </div>
            <div class="div1">
                <label for="prenom_epouse" style="color: black;">Prenom de l'epouse : &nbsp;</label>
                <input type="text" id="" name="prenom_epouse" placeholder="Donner le prenom de la mariée">
            </div>
            <div class="div1">
                <label for="regime" style="color: black;">Regime Matrimonial : &nbsp;</label>
                <input type="text" id="" name="regime" placeholder="Donner le regime matrimonial du couple">
            </div>

            <br><br>

            <span> Coordonnées du demandeur </span>
            <div class="div1">
                <label for="nom_demandeur" style="color: black;">Nom du demandeur : &nbsp;</label>
                <input type="text" id="" name="nom_demandeur" placeholder="Donner votre nom">
            </div>
            <div class="div1">
                <label for="prenom_demandeur" style="color: black;">Prenom_demandeur : &nbsp;</label>
                <input type="text" id="" name="prenom_demandeur" placeholder="Donner votre prenom">
            </div>
            <div class="div1">
                <label for="date_demande" style="color: black;">Date de la demande : &nbsp;</label>
                <input type="date" id="" name="date_demande">
            </div>
            <div class="div1">
                <label for="num_demandeur" style="color: black;">Contact : &nbsp;</label>
                <input type="tel" id="" name="num_demandeur" placeholder="Donner votre numero">
            </div>
            <div class="div1">
                <label for="ville_demandeur" style="color: black;">Ville : &nbsp;</label>
                <input type="text" id="" name="ville_demandeur" placeholder="Donner votre ville d'habitation">
            </div>
            <div class="div1">
                <label for="lien_avec_epous" style="color: black;">Liens avec les epous : &nbsp;</label>
                <input type="text" id="" name="lien_avec_epous" placeholder="Donner votre lien de parenté avec les epous">
            </div>

            <div>
                <button type="submit">
                    Envoyer
                </button>
            </div>
        </form>
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