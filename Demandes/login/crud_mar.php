<?php require "../mariage/data_base_connector_mariage.php"; ?>

<?php
if (isset($_POST["submit"])) {
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
        $query = mysqli_query($connecter, "INSERT INTO mariage (date_mariage, nom_mairie, nom_epous, prenom_epous, nom_epouse, prenom_epouse, regime_matrimoniale, date_demande) 
        VALUES ('$date', '$nom_mairie', '$nom_epous', '$prenom_epous', '$nom_epouse', '$prenom_epouse', '$regime', '$date_demande');");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Informations UD mariage </title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">
</head>

<body>
    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplir en fonction du bouton UD choisit</em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action="">

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
                <button type="submit" name="submit">
                    Envoyer
                </button>
            </div>
        </form>
    </div>

    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>
</body>