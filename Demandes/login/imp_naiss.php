<?php

include("../naissances/data_base_connector.php");
require_once __DIR__ . '../../naissances/vendor/autoload.php';

$num_demande = $GET['Numero_demande'];

$sql = mysqli_query($conn, "SELECT * FROM naissance WHERE Numero_demande = '$num_demande' ");

$naiss = mysqli_fetch_assoc($sql);

$ladate = $_POST["Date"];
$nom_e = $_POST["nom_enfant"];
$prenom_e = $_POST["prenom_enfant"];
$materniter = $_POST["materniter"];
$date_naissance = $_POST["Date_naissance"];
$nom_pere = $_POST["nom_du_pere"];
$ville_naissance = $_POST["ville_naissance"];
$prenom_pere = $_POST["prenom_du_pere"];
$nom_mere = $_POST["nom_mere"];
$prenom_mere = $_POST["prenom_mere"];
$fonction_pere = $_POST["fonction_pere"];
$fonction_mere = $_POST["fonction_mere"];
$habitation_pere = $_POST["habitation_pere"];
$habitation_mere = $_POST["habitation_mere"];

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

$data .= '<div style="text-align: center;"> <h2 class="notransform"> Le : '  <?= $naiss['Date_naissance']; ?>  ' dans la ville de' . $ville_naissance . '</h2>';

$data .= '<h2 class="notransform"> à la maternité de : ' . $materniter . '</h2>';

$data .= '<h2 class="notransform"> est née : ' . $nom_e . ' ' . $prenom_e . '</h2>';

$data .= '<h2 class="notransform"> de père : ' . $nom_pere . ' ' . $prenom_pere . '<br> ayant pour fonction : ' . $fonction_pere . '<br> habitant à : ' . $habitation_pere . '</h2>';

$data .= '<h2 class="notransform"> et de mère : ' . $nom_mere . ' ' . $prenom_mere . '<br> ayant pour fonction : ' . $fonction_mere . '<br> habitant à : ' . $habitation_mere . '</h2>';


$data .= '<h2 class="notransform"> <br>Délivré, le ' . $ladate . '</h2> </div>';

$data .= '</body>';

$mpdf->WriteHTML($data);

$mpdf->Output('ActeNaissance.pdf', 'I');
