<?php require "../deces/data_base_connector_deces.php"; ?>

<?php
if (isset($_POST["submit"])) {
    if (
        isset($_POST["date_deces"]) && !empty($_POST["date_deces"])
        && isset($_POST["nom_p_decedee"]) && !empty($_POST["nom_p_decedee"])
        && isset($_POST["prenom_p_decedee"]) && !empty($_POST["prenom_p_decedee"])
        // && isset($_POST["sexe"]) && !empty($_POST["sexe"])
        && isset($_POST["nom_pere"]) && !empty($_POST["nom_pere"])
        && isset($_POST["prenom_pere"]) && !empty($_POST["prenom_pere"])
        && isset($_POST["nom_mere"]) && !empty($_POST["nom_mere"])
        && isset($_POST["prenom_mere"]) && !empty($_POST["prenom_mere"])
        && isset($_POST["Date"]) && !empty($_POST["Date"])
    ) {
        $ladate = htmlspecialchars($_POST["date_deces"]);
        $nom_d = htmlspecialchars($_POST["nom_p_decedee"]);
        $prenom_d = htmlspecialchars($_POST["prenom_p_decedee"]);
        // $sexe = $_POST["sexe"];
        $nom_pere  = htmlspecialchars($_POST["nom_pere"]);
        $prenom_pere = htmlspecialchars($_POST["prenom_pere"]);
        $nom_mere  = htmlspecialchars($_POST["nom_mere"]);
        $prenom_mere  = htmlspecialchars($_POST["prenom_mere"]);
        $ladatee  = htmlspecialchars($_POST["Date"]);
        $query = mysqli_query($conx, "INSERT INTO deces (ladate, Nom_decede, prenom_decede, Nom_pere, prenom_pere, Nom_mere, prenom_mere, Date_demande) 
        VALUES ('$ladate', '$nom_d', '$prenom_d', '$nom_pere', '$prenom_pere', '$nom_mere', '$prenom_mere', '$ladatee');");

        if ($query) {
            header("Location:adminfile.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations UD décès</title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">

    <style>
        .div1>.div1>input {
            align-items: center;
            width: 15px;

        }
    </style>
</head>

<body>

    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplir en fonction du bouton UD choisit </em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action="">

            <span>Informations essentielles pour l'acte</span>
            <div class="div1">
                <label for="date_deces" style="color: black;">Date du décès : &nbsp;</label>
                <input type="date" id="" name="date_deces" placeholder="Donner la date du décès">
            </div>
            <div class="div1">
                <label for="nom_p_decedee" style="color: black;">Nom de la personne dont vous demandez l'axcte : &nbsp;</label>
                <input type="text" id="" name="nom_p_decedee" placeholder="Donner le nom du défunt">
            </div>
            <div class="div1">
                <label for="prenom_p_decedee" style="color: black;">Prenom de la personne dont vous demandez l'axcte : &nbsp;</label>
                <input type="text" id="" name="prenom_p_decedee" placeholder="Donner le prenom du défunt">
            </div>
            <span>Identite des parents</span>
            <div class="div1">
                <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                <input type="text" id="" name="nom_pere" placeholder="Donner le nom du père du défunt">
            </div>
            <div class="div1">
                <label for="prenom_pere" style="color: black;">Prenom du père : &nbsp;</label>
                <input type="text" id="" name="prenom_pere" placeholder="Donner le prenom du père du défunt">
            </div>
            <div class="div1">
                <label for="nom_mere" style="color: black;">Nom de la mère : &nbsp;</label>
                <input type="text" id="" name="nom_mere" placeholder="Donner le nom de la mère du défunt">
            </div>
            <div class="div1">
                <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                <input type="text" id="" name="prenom_mere" placeholder="Donner le prenom de la mère du défunt">
            </div>
            <div class="div1">
                <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                <input type="date" id="Date" name="Date" placeholder="Donner la date de votre  htmlspecialchars(">
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