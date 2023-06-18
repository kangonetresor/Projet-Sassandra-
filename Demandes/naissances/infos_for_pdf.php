<?php require "./data_base_connector.php"; ?>

<?php
if (isset($_POST)) {
    if (
        isset($_POST["Mail"]) && !empty($_POST["Mail"])
        && isset($_POST["Date"]) && !empty($_POST["Date"])
        && isset($_POST["nom_enfant"]) && !empty($_POST["nom_enfant"])
        && isset($_POST["prenom_enfant"]) && !empty($_POST["prenom_enfant"])
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
        $mail = htmlspecialchars($_POST["Mail"]);
        $ladate = htmlspecialchars($_POST["Date"]);
        $nom_e = htmlspecialchars($_POST["nom_enfant"]);
        $prenom_e = htmlspecialchars($_POST["prenom_enfant"]);
        $materniter = htmlspecialchars($_POST["materniter"]);
        $date_naissance = htmlspecialchars($_POST["Date_naissance"]);
        $ville_naissance = htmlspecialchars($_POST["ville_naissance"]);
        $nom_pere = htmlspecialchars($_POST["nom_du_pere"]);
        $prenom_pere = htmlspecialchars($_POST["prenom_du_pere"]);
        $nom_mere = htmlspecialchars($_POST["nom_mere"]);
        $prenom_mere = htmlspecialchars($_POST["prenom_mere"]);
        $fonction_pere = htmlspecialchars($_POST["fonction_pere"]);
        $fonction_mere = htmlspecialchars($_POST["fonction_mere"]);
        $contact_pere = htmlspecialchars($_POST["contact_pere"]);
        $contact_mere = htmlspecialchars($_POST["contact_mere"]);
        $habitation_pere = htmlspecialchars($_POST["habitation_pere"]);
        $habitation_mere = htmlspecialchars($_POST["habitation_mere"]);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
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
    <nav>
        <a href="../../index1.html" class="logo"> <img src="../logosassandra.png">&nbsp; Mairie de Sassandra | Etat Civil</a>

        <ul>
            <li><a href="../../index2.html" class="bouton-actif"> Voir Sassandra</a></li>
        </ul>
    </nav>

    <!-- <div class="acteNaiss">
        <h2 class="img1">
            <p class="paragraphnaissance">Acte de naissance</p>
        </h2>
    </div> -->
    <br>
    <br><br><br>

    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplissez le formulaire pour recevoir l'extrait dans votre boite mail </em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action="pdf_naissance.php"> <!--autocomplate="off" -->
            <span> Mail d'envoi </span>
            <div class="div1">
                <label for="Mail" style="color: black;">Donner votre mail sur lequel l'extrait sera envoyer : </label>
                <input type="text" id="Mail" name="Mail" placeholder="Donner votre mail">
            </div>
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
                <button type="submit">
                    Envoyer
                </button>
            </div>

        </form>
    </div>

    <br><br><br>

    <!-- <div>
        <a href="./generation_1.html" target="_blank"> Clicker ici pour generer votre acte de naissance</a>
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