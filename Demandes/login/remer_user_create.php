<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'Acte de Naissance</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" href="../logosassandra.png">
    <style>
        p {
            font-size: 25px;
            text-transform: uppercase;
            text-align: center;
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

    <br><br><br><br><br>

    <br><br>

    <div style="text-align: center;">
        <?php
        if (isset($_POST["submit"])) {
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];

            echo 'Merci de vous etes inscrit sur notre page ' . $nom . ', vous pouvez maintenant vous connecter';
            echo " avec votre email : " . $mail . ".";
        }
        ?>
    </div>
    <br>
    <br>


    <div style="text-align: center;">
        <a href="./connexion.php" style="padding: 5px 10px;" class="bouton-actif">Cliquez ici</a>

    </div>

</body>

</html>