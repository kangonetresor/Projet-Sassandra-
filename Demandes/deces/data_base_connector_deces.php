<?php

// Paramètre de connexion a ma base de donnees 
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "progsass_deces";

//connexion a la base de donnees
$conx = new mysqli($servername, $username, $password, $dbname);

//Verification de la connexion a la base de donnees
if ($conx->connect_error) {
    die("La connexion a echoue : " . $conx->connect_error);
}
