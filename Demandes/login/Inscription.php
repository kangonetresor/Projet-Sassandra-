<?php

if (isset($_POST)) {
    if (
        isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["mail"]) && !empty($_POST["mail"])
        && isset($_POST["pwd"]) && !empty($_POST["pwd"])
    ) {
        $nom = $_POST["nom"];
        $email = $_POST["mail"];
        $mdp = $_POST["pwd"];
        // $indiq = "";

        $server = "localhost";
        $utilisateur = "root";
        $mot_de_pass = "";
        $basededonnees = "progsass_admin_users";
        $con = mysqli_connect($server, $utilisateur, $mot_de_pass, $basededonnees);

        $req = mysqli_query($con, "INSERT INTO users(Nom_user, Email, PWD) VALUES ('$nom', '$email', '$mdp');");


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
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="./connexion.css">
    <link rel="icon" href="../logosassandra.png">
    <!-- <link rel="stylesheet" href="../../style.css"> -->

</head>

<body>
    <div class="alternative">
        <p>Se connecter si vous avez deja un compte.</p>
        <br><br>
        <a href="./connexion.php">Se connecter</a>
    </div>

    <div class="container" id="container">
        <div class="form-container container-inscription">
            <?php
            // if (isset($erreur)) {
            //     echo "<h4 style='text-align: center; margin-top: 50px; color: red;'>" . $indiq . "</h4>";
            // }
            ?>
            <form action="" method="post">
                <h1>Creer un compte</h1>
                <span>Utiliser votre adresse mail</span>
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Mot de passe">
                <button type="submit">Creer le compte</button>
            </form>
        </div>
    </div>

</body>

</html>