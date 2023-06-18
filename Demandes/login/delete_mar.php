<?php

include '../mariage/data_base_connector_mariage.php';
$num_demande = $_GET['numero_demande'];
$sql = "DELETE FROM mariage WHERE numero_demande = '$num_demande' ";
$req = mysqli_query($connecter, $sql);
if ($req) {
    header("Location:confirmation.php");
}
