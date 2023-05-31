<?php

// Paramètre de connexion a ma base de donnees 
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "progsass_mariage";

//connexion a la base de donnees
$connecter = new mysqli($servername, $username, $password, $dbname);

//Verification de la connexion a la base de donnees
if ($connecter->connect_error) {
    die("La connexion a echoue : " . $connecter->connect_error);
} else {
    echo "Connexion a la base de donnee reussit  ";
}
