<?php require "./data_base_connector.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["nom_du_pere"]) && !empty($_POST["nom_du_pere"])
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
        $nom_pere = $_POST["nom_du_pere"];
        $prenom_pere = $_POST["prenom_du_pere"];
        $nom_mere = $_POST["nom_mere"];
        $prenom_mere = $_POST["prenom_mere"];
        $fonction_pere = $_POST["fonction_pere"];
        $fonction_mere = $_POST["fonction_mere"];
        $contact_pere = $_POST["contact_pere"];
        $contact_mere = $_POST["contact_mere"];
        $habitation_pere = $_POST["habitation_pere"];
        $habitation_mere = $_POST["habitation_mere"];
        $query = mysqli_query($conn, "INSERT INTO info_parents(Nom_pere, Prenom_pere, Nom_mere, Prenom_mere, Fonction_pere, Fonction_mere, Contacte_pere, Contacte_mere, Lieu_habitation_pere, Lieu_habitation_mere) VALUES ('$nom_pere', '$prenom_pere', '$nom_mere', '$prenom_mere', '$fonction_pere', '$fonction_mere', '$contact_pere', '$contact_mere', '$habitation_pere', '$habitation_mere');");
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
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" href="../../images/logosassandra.png">
    <link rel="stylesheet" href="../style_naissance.css">
</head>

<body>

    <nav>
        <a href="../../index1.html" class="logo"> <img src="../../images/logosassandra.png">&nbsp; Mairie de Sassandra | Etat Civil</a>

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
        <h3>
            Etape 3
        </h3>
        <h1 style="text-transform: none;">
            Remplicez le formulaire pour effectuer une demande
        </h1>
    </div>

    <br><br>

    <div class="Zone_de_zone">
        <form method="post" action="">
            <div class="label_demande">

                <span>Informations sur les parents</span>
                <div class="div1">
                    <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                    <input type="text" id="nom_pere" name="nom_du_pere">
                </div>
                <div class="div1">
                    <label for="nom_mere" style="color: black;">Prenom du père &nbsp;</label>
                    <input type="text" id="nom_mere" name="prenom_du_pere">
                </div>
                <div class="div1">
                    <label for="fonction_pere" style="color: black;">Fonction du père : &nbsp;</label>
                    <input type="text" id="fonction_pere" name="fonction_pere">
                </div>
                <div class="div1">
                    <label for="contact_pere" style="color: black;">Contact du père : &nbsp;</label>
                    <input type="text" id="fonction_pere" name="contact_pere">
                </div>
                <div class="div1">
                    <label for="habitation_pere" style="color: black;">Lieu d'habitation du père : &nbsp;</label>
                    <input type="text" id="habitation_pere" name="habitation_pere">
                </div>
                <div class="div1">
                    <label for="prenom_pere" style="color: black;">Nom de la mère : &nbsp;</label>
                    <input type="text" id="prenom_pere" name="nom_mere">
                </div>
                <div class="div1">
                    <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                    <input type="text" id="prenom_mere" name="prenom_mere">
                </div>
                <div class="div1">
                    <label for="fonction_mere" style="color: black;">Fonction de la mère : &nbsp;</label>
                    <input type="text" id="fonction_mere" name="fonction_mere">
                </div>
                <div class="div1">
                    <label for="contact_mere" style="color: black;">Contact de la mère : &nbsp;</label>
                    <input type="text" id="contact_mere" name="contact_mere">
                </div>
                <div class="div1">
                    <label for="habitation_mere" style="color: black;">Lieu d'habitation de la mère : &nbsp;</label>
                    <input type="text" id="habitation_mere" name="habitation_mere">
                </div>
                <div>
                    <button type="submit">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>


    <br><br><br><br><br>
    <div id="contactez-nous">

        <ul class="Moy-contact">
            <li>
                <h2>Contactez nous par mail</h2>
            </li>
            <li><a href="mailto:zahkangone@gmail.com">En Cliquant Ici &nbsp;<img src="../img/gmail-logo-24.png" alt=""></a></li>
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