<?php

require_once __DIR__ . '/vendor/autoload.php';

$ladate = $_POST["date_deces"];
$nom_d = $_POST["nom_p_decedee"];
$prenom_d = $_POST["prenom_p_decedee"];
$nom_pere  = $_POST["nom_pere"];
$prenom_pere = $_POST["prenom_pere"];
$nom_mere  = $_POST["nom_mere"];
$prenom_mere  = $_POST["prenom_mere"];
$ladatee  = $_POST["Date"];

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

$data .= '<div style="text-align: center;"> <h2 class="notransform"> Le : ' . $ladate . '</h2>';

$data .=  '<h2> à été déclerer décéder Mr(me) : ' . $nom_d . ' ' . $prenom_d . '</h2>';

$data .= '<h2 class="notransform"> de père : ' . $nom_pere . ' ' . $prenom_pere . '</h2>';

$data .= '<h2 class="notransform"> et de mère : ' . $nom_mere . ' ' . $prenom_mere . '.</h2>';

// $data .= '<h2 >Décès de : ' . $nom_d . ' ' . $prenom_d . '</h2>';

$data .= '<h2 class="notransform"> <br>Délivré, le ' . $ladatee . '</h2> </div>';

$data .= '</body>';

// Ecrire le pdf 
$mpdf->WriteHTML($data);

// sortie dans le navigateur 
$mpdf->Output('ActeDeces.pdf', 'I');
