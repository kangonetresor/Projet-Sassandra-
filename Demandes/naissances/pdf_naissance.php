<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';
// $con = mysqli_connect('localhost', 'root', '', 'progsass_naissances');

// $num_demande = $_POST["Numero_demande"];
$mail = $_POST["Mail"];
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
// $annee = strtotime($date_naissance);

$mpdf = new \Mpdf\Mpdf();

// donnees html a traiter 
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

$data .= '<div style="text-align: center;"> <h2 class="notransform"> Le : ' . $date_naissance . ' dans la ville de' . $ville_naissance . '</h2>';

$data .= '<h2 class="notransform"> à la maternité de : ' . $materniter . '</h2>';

$data .= '<h2 class="notransform"> est née : ' . $nom_e . ' ' . $prenom_e . '</h2>';

$data .= '<h2 class="notransform"> de père : ' . $nom_pere . ' ' . $prenom_pere . '<br> ayant pour fonction : ' . $fonction_pere . '<br> habitant à : ' . $habitation_pere . '</h2>';

$data .= '<h2 class="notransform"> et de mère : ' . $nom_mere . ' ' . $prenom_mere . '<br> ayant pour fonction : ' . $fonction_mere . '<br> habitant à : ' . $habitation_mere . '</h2>';


$data .= '<h2 class="notransform"> <br>Délivré, le ' . $ladate . '</h2> </div>';

$data .= '</body>';

// Ecrire le pdf 
$mpdf->WriteHTML($data);

// sortie en tant que chaine de caractères
$pdf = $mpdf->Output('', 'I');


// Donnees d'enquete

$enquirydata = [

    'Mail' => $mail,
    'Date Demande' => $ladate,
    'Nom Enfant' => $nom_e,
    'Prenom Enfant' => $prenom_e,
    'Maternite' => $materniter,
    'Date Naissance' => $date_naissance,
    'Ville Naissance' => $ville_naissance,
    'Nom Pere' => $nom_pere,
    'Prenom Pere' => $prenom_pere,
    'Nom Mere' => $nom_mere,
    'Prenom Mere' => $prenom_mere,
    'Fonction Pere' => $fonction_pere,
    'Fonction Mere' => $fonction_mere,
    'Habitation Pere' => $habitation_pere,
    'Habitation Mere' => $habitation_mere,

];

// Lancer la fonction
sendEmail($pdf, $enquirydata);


function sendEmail($pdf, $enquirydata)
{

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                      //Enable verbose debug output
        // SMTP::DEBUG_SERVER
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'e10803f6745981';                     //SMTP username
        $mail->Password   = 'CB760781386FEC';                               //SMTP password
        $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
        // PHPMailer::ENCRYPTION_SMTPS
        $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('test@monemail.com', 'Test Form');
        $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

        // Attachment
        $mail->addStringAttachment($pdf, 'myattachment.pdf');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}







































































// use Mpdf\Mpdf;

// require('../../vendor/autoload.php');
// $con = mysqli_connect('localhost', 'root', '', 'progsass_naissances');
// $res = mysqli_query($con, "SELECT * FROM naissance");
// if (mysqli_num_rows($res) > 0) {
//     $html = '<table>';
//     $html .= '<tr> <td>Date de naissance</td> <td>Nom</td> <td>Prenom</td>';
//     while ($row = mysqli_fetch_assoc($res)) {
//         $html .= '<tr><td>' . $row['Date_naissance'] . '</td><td>' . $row['Nom_e'] . '</td><td>' . $row['Prenom_e'] . '</td></tr>';
//     }
//     $html .= '</table>';
// }
// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML($html);
// $file = 'files/' . time() . '.pdf';
// $mpdf->output($file, 'I');
