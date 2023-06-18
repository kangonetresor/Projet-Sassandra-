<?php

require __DIR__ . '/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$date_naissance = $_POST["Date_naissance"];
$materniter = $_POST["materniter"];
$nom_e = $_POST["nom_enfant"];
$prenom_e = $_POST["prenom_enfant"];
$nom_pere = $_POST["nom_du_pere"];
$prenom_pere = $_POST["prenom_du_pere"];
$fonction_pere = $_POST["fonction_pere"];
$habitation_pere = $_POST["habitation_pere"];
$nom_mere = $_POST["nom_mere"];
$nom_mere = $_POST["prenom_mere"];
$fonction_mere = $_POST["fonction_mere"];
$habitation_mere = $_POST["habitation_mere"];
$ladate  = $_POST["Date"];

// $html = "<h1> Example </h1>";
// $html .= "Bonjour $nom_pere";
// $html .= " Comment ca va $prenom_pere";
// $html .= '<img src = "logosassandra.png">';

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper('A4', 'portrait');

$html = file_get_contents("extrait.html");

$html = str_replace(["{{ Date_naissance }}", "{{ materniter }}", "{{ nom_enfant }}", "{{ prenom_enfant }}", "{{ nom_du_pere }}", "{{ prenom_du_pere }}", "{{ fonction_pere }}", "{{ habitation_pere }}", "{{ nom_mere }}", "{{ prenom_mere }}", "{{ fonction_mere }}", "{{ habitation_mere }}", "{{ Date }}"], [$date_naissance, $materniter, $nom_e, $prenom_e, $nom_pere, $prenom_pere, $fonction_pere, $habitation_pere, $nom_mere, $prenom_mere, $fonction_mere, $habitation_mere, $ladate], $html);

$dompdf->loadHtml($html);
// $dompdf->loadHtmlFile("votreextrait.html");

$dompdf->render();

$dompdf->stream("MaDemande.pdf", ["Attachment" => 0]);
