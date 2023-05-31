<?php require "./data_base_connector.php"; ?>

<?php


if (isset($_POST)) {
    if (
        isset($_POST["nom_enfant"]) && !empty($_POST["nom_enfant"])
        && isset($_POST["prenom_enfant"]) && !empty($_POST["prenom_enfant"])
        // && isset($_POST["sexe_1"]) && !empty($_POST["sexe_1"])
        // && isset($_POST["sexe_0"]) && !empty($_POST["sexe_0"])
        && isset($_POST["materniter"]) && !empty($_POST["materniter"])
        && isset($_POST["Date_naissance"]) && !empty($_POST["Date_naissance"])
        && isset($_POST["ville"]) && !empty($_POST["ville"])
    ) {
        $nom_e = $_POST["nom_enfant"];
        $prenom_e = $_POST["prenom_enfant"];
        // $sexe_1 = $_POST["sexe_1"];
        // $sexe_0 = $_POST["sexe_0"];
        $materniter = $_POST["materniter"];
        $date_naissance = $_POST["Date_naissance"];
        $ville = $_POST["ville"];
        $query = mysqli_query($conn, "INSERT INTO la_demande(Nom_e, Prenom_e, Nom_maternite, Date_naissance, Lieu_naissance) 
        VALUES ('$nom_e', '$prenom_e', '$materniter', '$date_naissance', '$ville');");
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
            Etape 2
        </h3>
        <h1 style="text-transform: none;">
            Remplissez ce formulaire aussi pour poursuivre votre demande
        </h1>
    </div>

    <br><br>

    <div class="Zone_de_zone">
        <form method="post" action="">
            <div class="label_demande">

                <span>Informations de la naissance</span>
                <div class="div1">
                    <label for="nom_e" style="color: black;">Nom de l'enfant : &nbsp;</label>
                    <input type="text" id="nom_e" name="nom_enfant">
                </div>
                <div class="div1">
                    <label for="prenom_e" style="color: black;">Prenom de l'enfant : &nbsp;</label>
                    <input type="text" id="prenom_e" name="prenom_enfant">
                </div>
                <div class="div1">
                    <label for="nom_martenote" style="color: black;">Maternité : &nbsp;</label>
                    <input type="text" id="nom_martenote" name="materniter">
                </div>
                <div class="div1">
                    <label for="Date" style="color: black;">Date de la naissance : &nbsp;</label>
                    <input type="date" id="Date" name="Date_naissance">
                </div>
                <div class="div1">
                    <label for="lieu_naissance" style="color: black;">Lieu de la naissance : &nbsp;</label>
                    <input type="text" id="lieu_naissance" name="ville">
                </div>
                <div>
                    <button type="submit">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>



    <div>
        <a href="../naissances/naissance (3).php"> Etape Suivante </a>
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