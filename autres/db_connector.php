<?php

// Paramètre de connexion a ma base de donnees 
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "libraire";

$conn = new mysqli($servername, $username, $password, $dbname);

//Verification de la connexion a la base de donnees
if ($conn->connect_error) {
    die("LA connexion a echoue : " . $conn->connect_error);
} else {
    echo "Connexion a la base de donnee reussit !! ";
}
