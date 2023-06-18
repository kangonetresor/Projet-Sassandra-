<?php

// Paramètre de connexion a ma base de donnees 
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "progsass_naissances";

//connexion a la base de donnees
$conn = new mysqli($servername, $username, $password, $dbname);

//Verification de la connexion a la base de donnees
if ($conn->connect_error) {
    die("La connexion a echoue : " . $conn->connect_error);
}
