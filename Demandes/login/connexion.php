<?php
if (isset($_POST['boutton-valider'])) {
    if (
        isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["mdp"]) && !empty($_POST["mdp"])
    ) {

        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $erreur = "";
        $error = "";

        // Nous allons verifier les informations entree sont correctes
        //Connexion a la base de donnees 
        $server = "localhost";
        $utilisateur = "root";
        $mot_de_pass = "";
        $basededonnees = "progsass_admin_users";
        $con = mysqli_connect($server, $utilisateur, $mot_de_pass, $basededonnees);
        //requete pour selectionner l'utilisateurs qui a pour nom d'utilisateur et mot de passse les infos qui ont ete entrees
        $req = mysqli_query($con, "SELECT * FROM admin WHERE Nom_admin= '$email' AND PWD= '$mdp' ");
        $num_ligne = mysqli_num_rows($req);
        if ($num_ligne > 0) {
            header("Location:adminfile.php");
        } else {
            $erreur = "Mot de pass ou Email incorrectes !";
        }
        $reqq = mysqli_query($con, "SELECT * FROM users WHERE Email= '$email' AND PWD= '$mdp' ");
        $num_li = mysqli_num_rows($reqq);
        if ($num_li > 0) {
            header("Location:usersfile.php");
        } else {
            $error = "Mot de pass ou Email incorrecte !";
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
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="./connexion.css">
    <link rel="icon" href="../logosassandra.png">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container container-connexion">
            <!-- <div "> -->
            <?php
            if (isset($erreur)) {
                echo "<h4 style='text-align: center; margin-top: 50px; color: red;'>" . $erreur . "</h4>";
            } elseif (isset($error)) {
                echo "<h4 style='text-align: center; margin-top: 50px; color: red;'>" . $error . "</h4>";
            }
            ?>
            <!-- </div> -->
            <form action="" method="POST">
                <h1>Se connecter</h1>
                <span>J'ai deja un compte</span>
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <button type="submit" name="boutton-valider">Se connecter</button>
            </form>
        </div>
    </div>

</body>

</html>