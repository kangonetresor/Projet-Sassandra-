<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat Civil | Mairie de Sassandra</title>
    <link rel="icon" href="../logosassandra.png">

    <link rel="stylesheet" href="../../style.css">

    <style>
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .bouton-actif {
            padding: 5px 10px;
            margin-top: 10px;
            text-transform: uppercase;
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
    <br><br><br><br><br>
    <div>

        <?php
        // $server = "localhost";
        // $utilisateur = "root";
        // $mot_de_pass = "";
        // $basededonnees = "progsass_admin_users";
        // $con = mysqli_connect($server, $utilisateur, $mot_de_pass, $basededonnees);

        // if (isset($_POST["boutton-valider"])) {
        // if (
        //     isset($_POST["Nom_user"]) && !empty($_POST["Nom_user"])
        //     && isset($_POST["Email"]) && !empty($_POST["Email"])
        //     && isset($_POST["PWD"]) && !empty($_POST["PWD"])
        // )
        // $mail = $_GET["Email"];

        // $resutats = mysqli_query($con, "SELECT * FROM users WHERE ");
        if (isset($_POST["boutton-valider"])) {
            $mail = $_POST["email"];

            echo "Bienvenu " . $mail . ", Faite le choix du service que vous voulez.";
        }
        ?>


        <a class="bouton-actif" href="../naissances/naissances (1).php" target="_blank"> Faire une demande d'acte de Naissance</a>
        <a class="bouton-actif" href="../mariage/mariages (1).php" target="_blank"> Faire une demande d'acte de Mariage</a>
        <a class="bouton-actif" href="../deces/deces (1).php" target="_blank"> Faire une demande d'acte de Décès</a>

    </div>

</body>




</html>