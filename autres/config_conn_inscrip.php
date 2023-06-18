<?php
// verifions les informations du formulaire
if (
    isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["mdp"]) && !empty($_POST["mdp"])
) {

    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

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
        echo "Mot de pass ou Email incorrectes !";
    }
}

// Arriver a la 30.31
