<?php require "./data_base_connector.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["Ask"]) && !empty($_POST["Ask"])
        && isset($_POST["Ack"]) && !empty($_POST["Ack"])
        && isset($_POST["link_d"]) && !empty($_POST["link_d"])
        && isset($_POST["contact"]) && !empty($_POST["contact"])
        && isset($_POST["Date"]) && !empty($_POST["Date"])
        && isset($_POST["nom_enfant"]) && !empty($_POST["nom_enfant"])
        && isset($_POST["prenom_enfant"]) && !empty($_POST["prenom_enfant"])
        && isset($_POST["sexe"]) && !empty($_POST["sexe"])
        && isset($_POST["materniter"]) && !empty($_POST["materniter"])
        && isset($_POST["Date_naissance"]) && !empty($_POST["Date_naissance"])
        && isset($_POST["ville"]) && !empty($_POST["ville"])
        && isset($_POST["nom_du_pere"]) && !empty($_POST["nom_du_pere"])
        && isset($_POST["nom_mere"]) && !empty($_POST["nom_mere"])
        && isset($_POST["prenom_du_pere"]) && !empty($_POST["prenom_du_pere"])
        && isset($_POST["prenom_mere"]) && !empty($_POST["prenom_mere"])
        && isset($_POST["fonction_pere"]) && !empty($_POST["fonction_pere"])
        && isset($_POST["fonction_mere"]) && !empty($_POST["fonction_mere"])
        && isset($_POST["contact_pere"]) && !empty($_POST["contact_pere"])
        && isset($_POST["contact_mere"]) && !empty($_POST["contact_mere"])
        && isset($_POST["habitation_pere"]) && !empty($_POST["habitation_pere"])
        && isset($_POST["habitation_mere"]) && !empty($_POST["habitation_mere"])
    ) {
        $nom = htmlspecialchars($_POST["Ask"]);
        $prenom = htmlspecialchars($_POST["Ack"]);
        $lien = htmlspecialchars($_POST["link_d"]);
        $contact = htmlspecialchars($_POST["contact"]);
        $ladate = htmlspecialchars($_POST["Date"]);
        $nom_e = htmlspecialchars($_POST["nom_enfant"]);
        $prenom_e = htmlspecialchars($_POST["prenom_enfant"]);
        $sexe = htmlspecialchars($_POST["sexe"]);
        $materniter = htmlspecialchars($_POST["materniter"]);
        $date_naissance = htmlspecialchars($_POST["Date_naissance"]);
        $ville = htmlspecialchars($_POST["ville"]);
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
        $query = mysqli_query($conn, "INSERT INTO naissance(Nom_d, Prenom_d, Lien_parenter, contact, Date_demande, Nom_e, Prenom_e, sexe, Nom_maternite, Date_naissance, Lieu_naissance, Nom_pere, Prenom_pere, Nom_mere, Prenom_mere, Fonction_pere, Fonction_mere, Contacte_pere, Contacte_mere, Lieu_habitation_pere, Lieu_habitation_mere) 
        VALUES ('$nom', '$prenom', '$lien', '$contact', '$ladate', '$nom_e', '$prenom_e', '$sexe', '$materniter', '$date_naissance', '$ville', '$nom_pere', '$prenom_pere', '$nom_mere', '$prenom_mere', '$fonction_pere', '$fonction_mere', '$contact_pere', '$contact_mere', '$habitation_pere', '$habitation_mere');");

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
    <title> Demande d'Acte de Naissance</title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">

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

    <div class="acteNaiss">
        <h2 class="img1">
            <p class="paragraphnaissance">Acte de naissance</p>
        </h2>
    </div>

    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplicez le formulaire pour effectuer une demande </em>
        </h1>
    </div>

    <br>

    <div class="Zone_de_zone">
        <form method="post" action=""> <!--autocomplate="off" -->

            <span>Informations du demandeur</span>
            <div class="div1">
                <label for="nom_d" style="color: black;">Nom : &nbsp;</label>
                <input type="text" id="nom_d" name="Ask" placeholder="Ecrivez votre Nom">
            </div>
            <div class="div1">
                <label for="prenom_d" style="color: black;">Prenom : &nbsp;</label>
                <input type="text" id="prenom_d" name="Ack" placeholder="Ecrivez votre Prenom">
            </div>
            <div class="div1">
                <label for="lien_d" style="color: black;">Lien de parenté : &nbsp;</label>
                <input type="text" id="lien_d" name="link_d" placeholder="Donner votre lien de parenté avec l'enfant">
            </div>
            <div class="div1">
                <label for="phone" style="color: black;">Contact : &nbsp;</label>
                <input type="tel" id="phone" name="contact" placeholder="Donner votre contact">
            </div>
            <div class="div1">
                <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                <input type="date" id="Date" name="Date">
            </div>

            <br>
            <br>

            <span>Informations de la naissance</span>
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
                    <input type="radio" id="sexe" name="sexe" value="M" require>
                    <label for="sexe" style="color: black;">Masculin</label>
                </div>
                <div class="div2">
                    <input type="radio" id="sexe" name="sexe" value="F">
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
                <input type="text" id="lieu_naissance" name="ville" placeholder="Donner la Ville où est née l'enfant">
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
                <label for="contact_pere" style="color: black;">Contact du père : &nbsp;</label>
                <input type="text" id="fonction_pere" name="contact_pere" placeholder="Donner son contact (10 chiffres)">
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
                <label for="contact_mere" style="color: black;">Contact de la mère : &nbsp;</label>
                <input type="text" id="contact_mere" name="contact_mere" placeholder="Donner son contact (10 chiffres)">
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