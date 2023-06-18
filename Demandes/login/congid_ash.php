<?php

$mysqli = new mysqli('localhost', 'root', '', 'progsass_admin_users');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}


// Inscription
$password = $_POST['pwd']; // Récupérer le mot de passe depuis le formulaire
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$erreur = "";
$error = "";

$requete = $mysqli->prepare("INSERT INTO users VALUES (?, ?)");
$requete->bind_param("ss", $email, $hashedPassword);

$email = $_POST['mail']; // Récupérer le nom d'utilisateur depuis le formulaire
$requete->execute();

if ($requete->affected_rows > 0) {
    header("Location:remerciement.php");
} else {
    echo "Erreur lors de l'enregistrement de l'utilisateur.";
}

$requete->close();


// Connexion
$Email = $_POST['email']; // Récupérer le nom d'utilisateur depuis le formulaire
$pword = $_POST['mdp']; // Récupérer le mot de passe depuis le formulaire

$requete = $mysqli->prepare("SELECT PWD FROM users WHERE Email = ?");
$requete->bind_param("s", $Email);
$requete->execute();
$requete->bind_result($hashedPassword);

if ($requete->fetch() && password_verify($pword, $hashedPassword)) {
    header("Location:usersfile.php");
} else {
    $erreur = "Mot de pass ou Email incorrectes !";
}

$requete->close();

$mysqli->close();






// if (isset($_POST)) {
//     if (
//         isset($_POST["nom"]) && !empty($_POST["nom"])
//         && isset($_POST["mail"]) && !empty($_POST["mail"])
//         && isset($_POST["pwd"]) && !empty($_POST["pwd"])
//     ) {
//         $valid = true;
//         $nom = $_POST["nom"];
//         $email = $_POST["mail"];
//         $mdp = $_POST["pwd"];
//         // $indiq = "";

//         $server = "localhost";
//         $utilisateur = "root";
//         $mot_de_pass = "";
//         $basededonnees = "";
//         $con = mysqli_connect($server, $utilisateur, $mot_de_pass, $basededonnees);

//         if ($valid) {
//             $crypt_mdp = password_hash($mdp, PASSWORD_DEFAULT);
//             $req = mysqli_query($con, "INSERT INTO users(Nom_user, Email, PWD) VALUES ('$nom', '$email', '$crypt_mdp');");
//             header("Location:remerciement.php");
//         }
//     }
// }


// 
?>










































// <?php
    // if (isset($_POST['boutton-valider'])) {
    //     if (
    //         isset($_POST["email"]) && !empty($_POST["email"])
    //         && isset($_POST["mdp"]) && !empty($_POST["mdp"])
    //     ) {

    //         $email = $_POST["email"];
    //         $mdp = $_POST["mdp"];
    //         $erreur = "";
    //         $error = "";

    //         // Nous allons verifier les informations entree sont correctes
    //         //Connexion a la base de donnees 
    //         $server = "localhost";
    //         $utilisateur = "root";
    //         $mot_de_pass = "";
    //         $basededonnees = "progsass_admin_users";
    //         $con = mysqli_connect($server, $utilisateur, $mot_de_pass, $basededonnees);
    //         //requete pour selectionner l'utilisateurs qui a pour nom d'utilisateur et mot de passse les infos qui ont ete entrees
    //         $req = mysqli_query($con, "SELECT * FROM admin WHERE Nom_admin= '$email' AND PWD= '$mdp' ");
    //         $num_ligne = mysqli_num_rows($req);
    //         if ($num_ligne > 0) {
    //             header("Location:adminfile.php");
    //         } else {
    //             $erreur = "Mot de pass ou Email incorrectes !";
    //         }

    //         $requete = $mysqli->prepare("SELECT PWD FROM users WHERE Email = ?");

    //         $requete->bind_param("s", $email);

    //         $requete->execute();

    //         $requete->bind_result($);



    //         // $reqq = mysqli_query($con, "SELECT * FROM users WHERE Email= '$email' ");

    //         // $des = mysqli_fetch_assoc($reqq);

    //         // var_dump($des);

    //         // // $num_ligne = mysqli_num_rows($req);
    //         // if ($des) {
    //         //     $passwordHash = $des["PWD"];

    //         //     if (password_verify($mdp, $passwordHash)) {
    //         //         header("Location:usersfile.php");
    //         //     } else {
    //         //         $erreur = "Mot de pass ou Email incorrectes !";
    //         //     }
    //         // }
    //     }
    // }
    // 
    ?>