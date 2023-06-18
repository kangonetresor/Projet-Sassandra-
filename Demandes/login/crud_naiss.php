<?php require "../naissances/data_base_connector.php"; ?>


<?php
if (isset($_POST["submit"])) {
    if (
        isset($_POST["Date"]) && !empty($_POST["Date"])
        && isset($_POST["nom_enfant"]) && !empty($_POST["nom_enfant"])
        && isset($_POST["prenom_enfant"]) && !empty($_POST["prenom_enfant"])
        && isset($_POST["sexe"]) && !empty($_POST["sexe"])
        && isset($_POST["materniter"]) && !empty($_POST["materniter"])
        && isset($_POST["Date_naissance"]) && !empty($_POST["Date_naissance"])
        && isset($_POST["ville_naissance"]) && !empty($_POST["ville_naissance"])
        && isset($_POST["nom_du_pere"]) && !empty($_POST["nom_du_pere"])
        && isset($_POST["nom_mere"]) && !empty($_POST["nom_mere"])
        && isset($_POST["prenom_du_pere"]) && !empty($_POST["prenom_du_pere"])
        && isset($_POST["prenom_mere"]) && !empty($_POST["prenom_mere"])
        && isset($_POST["fonction_pere"]) && !empty($_POST["fonction_pere"])
        && isset($_POST["fonction_mere"]) && !empty($_POST["fonction_mere"])
        && isset($_POST["habitation_pere"]) && !empty($_POST["habitation_pere"])
        && isset($_POST["habitation_mere"]) && !empty($_POST["habitation_mere"])
    ) {
        $ladate = htmlspecialchars($_POST["Date"]);
        $nom_e = htmlspecialchars($_POST["nom_enfant"]);
        $prenom_e = htmlspecialchars($_POST["prenom_enfant"]);
        $sexe = htmlspecialchars($_POST["sexe"]);
        $materniter = htmlspecialchars($_POST["materniter"]);
        $date_naissance = htmlspecialchars($_POST["Date_naissance"]);
        $ville_naissance = htmlspecialchars($_POST["ville_naissance"]);
        $nom_pere = htmlspecialchars($_POST["nom_du_pere"]);
        $prenom_pere = htmlspecialchars($_POST["prenom_du_pere"]);
        $nom_mere = htmlspecialchars($_POST["nom_mere"]);
        $prenom_mere = htmlspecialchars($_POST["prenom_mere"]);
        $fonction_pere = htmlspecialchars($_POST["fonction_pere"]);
        $fonction_mere = htmlspecialchars($_POST["fonction_mere"]);
        $habitation_pere = htmlspecialchars($_POST["habitation_pere"]);
        $habitation_mere = htmlspecialchars($_POST["habitation_mere"]);
        $query = mysqli_query($conn, "INSERT INTO naissance(Date_demande, Nom_e, Prenom_e, sexe, Nom_maternite, Date_naissance, Lieu_naissance, Nom_pere, Prenom_pere, Nom_mere, Prenom_mere, Fonction_pere, Fonction_mere, Lieu_habitation_pere, Lieu_habitation_mere) 
        VALUES ('$ladate', '$nom_e', '$prenom_e', '$sexe', '$materniter', '$date_naissance', '$ville_naissance', '$nom_pere', '$prenom_pere', '$nom_mere', '$prenom_mere', '$fonction_pere', '$fonction_mere','$habitation_pere', '$habitation_mere');");

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations UD naissance</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">
    <link rel="icon" href="../logosassandra.png">
    <style>
        .div1>.div2>input {
            align-items: center;
            width: 15px;

        }
    </style>
</head>

<body>
    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplir en fonction du bouton UD choisit</em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action=""> <!--autocomplate="off" -->

            <span>Informations de la naissance</span>
            <div class="div1">
                <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                <input type="date" id="Date" name="Date">
            </div>
            <div class="div1">
                <label for="nom_e" style="color: black;">Nom de l'enfant : &nbsp;</label>
                <input type="text" id="nom_e" name="nom_enfant" placeholder="Ecrivez le nom de l'enfant">
            </div>
            <div class="div1">
                <label for="prenom_e" style="color: black;">Prenom de l'enfant : &nbsp;</label>
                <input type="text" id="prenom_e" name="prenom_enfant" placeholder="Ecrivez le prenom de l'enfant">
            </div>
            <div class="div1">
                <label for="sexe" style="color: black;"> Sexe : </label>
                <div class="div2">
                    <input type="radio" id="sexe" name="sexe" value="Masculin" require>
                    <label for="sexe" style="color: black;">Masculin</label>
                </div>
                <div class="div2">
                    <input type="radio" id="sexe" name="sexe" value="Feminin">
                    <label for="sexe" style="color: black;">Feminin</label>
                </div>
            </div>
            <div class="div1">
                <label for="nom_martenote" style="color: black;">Maternité : &nbsp;</label>
                <input type="text" id="nom_martenote" name="materniter" placeholder="Donner la Maternité où est née l'enfant">
            </div>
            <div class="div1">
                <label for="Date" style="color: black;">Date de la naissance : &nbsp;</label>
                <input type="date" id="Date" name="Date_naissance">
            </div>
            <div class="div1">
                <label for="lieu_naissance" style="color: black;">Lieu de la naissance : &nbsp;</label>
                <input type="text" id="lieu_naissance" name="ville_naissance" placeholder="Donner la Ville où est née l'enfant">
            </div>

            <br>
            <br>

            <span>Informations sur les parents</span>
            <div class="div1">
                <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                <input type="text" id="nom_pere" name="nom_du_pere" placeholder="Donner le nom du père">
            </div>
            <div class="div1">
                <label for="nom_mere" style="color: black;">Prenom du père &nbsp;</label>
                <input type="text" id="nom_mere" name="prenom_du_pere" placeholder="Donner le prenom du père">
            </div>
            <div class="div1">
                <label for="fonction_pere" style="color: black;">Fonction du père : &nbsp;</label>
                <input type="text" id="fonction_pere" name="fonction_pere" placeholder="Quelle est la profesion du père de l'enfant ">
            </div>
            <div class="div1">
                <label for="habitation_pere" style="color: black;">Lieu d'habitation du père : &nbsp;</label>
                <input type="text" id="habitation_pere" name="habitation_pere" placeholder="Où habite le père de l'enfant">
            </div>
            <div class="div1">
                <label for="prenom_pere" style="color: black;">Nom de la mère : &nbsp;</label>
                <input type="text" id="prenom_pere" name="nom_mere" placeholder="Donner le nom de la mère">
            </div>
            <div class="div1">
                <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                <input type="text" id="prenom_mere" name="prenom_mere" placeholder="Donner le prenom de la mère">
            </div>
            <div class="div1">
                <label for="fonction_mere" style="color: black;">Fonction de la mère : &nbsp;</label>
                <input type="text" id="fonction_mere" name="fonction_mere" placeholder="Quelle est la profession la mère de l'enfant">
            </div>
            <div class="div1">
                <label for="habitation_mere" style="color: black;">Lieu d'habitation de la mère : &nbsp;</label>
                <input type="text" id="habitation_mere" name="habitation_mere" placeholder="Où habite la mère de l'enfant">
            </div class="div1">
            <div>
                <button type="submit" name="submit">
                    Envoyer
                </button>
            </div>

        </form>
    </div>
    <br>

    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>
</body>

</html>