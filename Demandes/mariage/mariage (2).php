<?php require "./data_base_connector_mariage.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["nom_demandeur"]) && !empty($_POST["nom_demandeur"])
        && isset($_POST["prenom_demandeur"]) && !empty($_POST["prenom_demandeur"])
        && isset($_POST["num_demandeur"]) && !empty($_POST["num_demandeur"])
        && isset($_POST["ville_demandeur"]) && !empty($_POST["ville_demandeur"])
        && isset($_POST["lien_avec_epous"]) && !empty($_POST["lien_avec_epous"])
    ) {
        $nom_demandeur = $_POST["nom_demandeur"];
        $prenom_demandeur = $_POST["prenom_demandeur"];
        $num_demandeur = $_POST["num_demandeur"];
        $ville_demandeur = $_POST["ville_demandeur"];
        $liens = $_POST["lien_avec_epous"];
        $query = mysqli_query($connecter, "INSERT INTO coordonnees_demandeur (nom_demandeur, prenom_demandeur, telephone, ville, lien_avec_epous) 
        VALUES ('$nom_demandeur', '$prenom_demandeur', '$num_demandeur', '$ville_demandeur', '$liens');");
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
                <span> Coordonnées du demandeur </span>
                <div class="div1">
                    <label for="nom_demandeur" style="color: black;">Nom du demandeur : &nbsp;</label>
                    <input type="text" id="" name="nom_demandeur" placeholder="Ecrivez votre nom ici">
                </div>
                <div class="div1">
                    <label for="prenom_demandeur" style="color: black;">Prenom_demandeur : &nbsp;</label>
                    <input type="text" id="" name="prenom_demandeur">
                </div>
                <div class="div1">
                    <label for="num_demandeur" style="color: black;">Contact : &nbsp;</label>
                    <input type="tel" id="" name="num_demandeur">
                </div>
                <div class="div1">
                    <label for="ville_demandeur" style="color: black;">Ville : &nbsp;</label>
                    <input type="text" id="" name="ville_demandeur" placeholder="Donner votre ville d'habitation">
                </div>
                <div class="div1">
                    <label for="lien_avec_epous" style="color: black;">Liens avec les epous : &nbsp;</label>
                    <input type="text" id="" name="lien_avec_epous" placeholder="Donner votre lien de parenter avec les epous">
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