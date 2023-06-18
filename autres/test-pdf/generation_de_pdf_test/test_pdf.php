<?php

use Dompdf\Dompdf;
use Dompdf\Options;

//les uses restent tous en haut 4

// Connexion a la base de donnes
require_once ''; // on y met notre base de donnees

$sql = 'SELECT * FROM users';
$query = $db->query($sql);
$users = $query->fetchAll();
// en suite faire un chichier a part qui contient les informations des utilisateur que je veux traiter
//7 dasn se fichier faire du html

// et aprtir de ca lorsquon veut gnerer se html dans un fichier pdf 
// on va creer un buffer de de sortir quin stock la generation des informations 
// dans la memoire et la genere sous forme de variable en sortie 
// demonstration 

ob_start(); // pour debuter la generation afin de stocker le pdf dans une variable 
require_once ''; // on fait cela et on met le nom de notre fichier html (qui est en realiter un fichier php) dans les cotes 
// en suite faire une variable
$html = ob_get_contents(); // cette variable html doit etre transporter pour etre mise dans 'loadHtml'
ob_end_clean(); // et on met ca pour arreter le buffer

// le die permet de recuperer notre pdf derriere
// avec tout cela en faisant un < die($html); > il nous permet de le generer simplement.


// et au sein de se fichier avant les informations que l'on veut recuperer de la base de donnee
// faire un < ?php foreach($users as $user): ? > en debut et faire un < ? php endforeach; ? >




// 
require_once '../dompdf/autoload.inc.php';

//Pour changer la police de caractères 
$option = new Options();
$option->set('defaultFont', 'Courier');

// pour dire quon veut utiliser dompdf il ajoute automatiquement use en haut 
$dompdf = new Dompdf($option);


// Avant le render je peux essayer de changer les dimensions de mon pdf 
$dompdf->setPaper('A4', 'portrait');




// pour que dans notre pdf nous voulons mettre du html
$dompdf->loadHtml('bonjour Tresor');

// je veux rendre se pdf (je veux le generer)
$dompdf->render();

//on peut aussi changer le nom du fichier si on le souhaite 
$fichier = 'Mon dpf.pdf';

// et comme il l'envoie le pdf en memoir je vais pourvoir lui dire avec la 
//commande suivant c'est bon envoie le en tend que fichier a telecharger
$dompdf->stream($fichier);
