<?php
include "../naissances/data_base_connector.php";
$num_demande = $_GET['Numero_demande'];
$sql = "DELETE FROM naissance WHERE Numero_demande = '$num_demande' ";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location:confirmation.php");
}
