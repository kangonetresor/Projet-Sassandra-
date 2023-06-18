<?php 
include '../deces/data_base_connector_deces.php';
$num_demande = $_GET['numero_demande'];
$sql = "DELETE FROM deces WHERE numero_demande = '$num_demande' ";
$req = mysqli_query($conx, $sql);
if ($req) {
    header("Location:confirmation.php");
}
