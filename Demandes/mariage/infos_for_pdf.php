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
        && isset($_POST["date_demande"]) && !empty($_POST["date_demande"])
    ) {
        $date = htmlspecialchars($_POST["date_mariage"]);
        $nom_mairie = htmlspecialchars($_POST["nom_mairie"]);
        $nom_epous = htmlspecialchars($_POST["nom_epous"]);
        $prenom_epous = htmlspecialchars($_POST["prenom_epous"]);
        $nom_epouse = htmlspecialchars($_POST["nom_epouse"]);
        $prenom_epouse = htmlspecialchars($_POST["prenom_epouse"]);
        $regime = htmlspecialchars($_POST["regime"]);
        $date_demande = htmlspecialchars($_POST["date_demande"]);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Informations</title>
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

    <br><br><br><br><br>


    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplicez le formulaire pour effectuer une demande d'acte de mariage</em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action="pdf_mariage.php">

            <span>Informations necessaires pour le l'Extrait</span>
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
            <div class="div1">
                <label for="date_demande" style="color: black;">Date de la demande : &nbsp;</label>
                <input type="date" id="" name="date_demande">
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