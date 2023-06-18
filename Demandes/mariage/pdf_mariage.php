<?php

require_once __DIR__ . '/vendor/autoload.php';

$date = $_POST["date_mariage"];
$nom_mairie = $_POST["nom_mairie"];
$nom_epous = $_POST["nom_epous"];
$prenom_epous = $_POST["prenom_epous"];
$nom_epouse = $_POST["nom_epouse"];
$prenom_epouse = $_POST["prenom_epouse"];
$regime = $_POST["regime"];
$date_demande = $_POST["date_demande"];

$mpdf = new \Mpdf\Mpdf();

$data = '';

$data .= '<body style="background-color: beige; font-family:chelvetica;">';

$data .= '<header style="text-align: center;"> <div> 
<h2> District du <br> Bas-Sassandra </h2>
<div> <img src="../logosassandra.png" style="width: 35mm; height: 30mm; margin: 0;"> </div>
<h2> Mairie de Sasssandra </h2> 
<h1> ETAT CIVIL </h1> </div> <div>';
$data .= "<h2>
Republique de Côte d'Ivoire
</h2>
<h1>
Extrait
</h1>
<h2>
du registre des actes de l'état civil <br>
pour l'année ####
</h2>
</div> </header>";

$data .= '<div style="text-align: center;"> <h2 class="notransform"> Le : ' . $date . '</h2>';

$data .= '<h2> à la Mairie de : ' . $nom_mairie . '</h2>';

$data .= '<h2> se sont unis Mr ' . $nom_epous . ' ' . $prenom_epous . ' et Mme ' . $nom_epouse . ' ' . $prenom_epouse . '</h2>';


$data .= '<h2 class="notransform">sous le regime de la : ' . $regime . '</h2>';

$data .= '<h2 class="notransform">Délivré, le ' . $date_demande . '</h2> </div>';

$data .= '</body>';

// Ecrire le pdf 
$mpdf->WriteHTML($data);

// sortie dans le navigateur 
$mpdf->Output('ActeMariage.pdf', 'I');
