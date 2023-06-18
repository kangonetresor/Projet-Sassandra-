<?php require "../mariage/data_base_connector_mariage.php";

$num_demande = $_GET['numero_demande'];

if (isset($_POST['submit'])) {


    $date = htmlspecialchars($_POST["date_mariage"]);
    $nom_mairie = htmlspecialchars($_POST["nom_mairie"]);
    $nom_epous = htmlspecialchars($_POST["nom_epous"]);
    $prenom_epous = htmlspecialchars($_POST["prenom_epous"]);
    $nom_epouse = htmlspecialchars($_POST["nom_epouse"]);
    $prenom_epouse = htmlspecialchars($_POST["prenom_epouse"]);
    $regime = htmlspecialchars($_POST["regime"]);
    $date_demande = htmlspecialchars($_POST["date_demande"]);

    $req = mysqli_query($connecter, "UPDATE mariage SET date_mariage = '$date', nom_mairie = '$nom_mairie', nom_epous = '$nom_epous', prenom_epous = '$prenom_epous', 
            nom_epouse = '$nom_epouse', prenom_epouse = '$prenom_epouse', regime_matrimoniale = '$regime', date_demande = '$date_demande' WHERE numero_demande = '$num_demande' ");

    if ($req) {
        header('Location:confirmation.php');
    } else {
        echo "Erreur" . mysqli_error($connecter);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Informations UD mariage </title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">
</head>

<body>
    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Modifier Les Informations</em>
        </h1>
    </div>

    <br>
    <?php
    $req = mysqli_query($connecter, "SELECT * FROM mariage WHERE numero_demande = '$num_demande' ");
    $mar = mysqli_fetch_assoc($req);
    ?>

    <div class="Zone_de_zone">
        <span>
            Modifier l'acte de mariage de numero : <?= $mar['numero_demande'] ?>
        </span>

        <form method="post" action="">

            <span>Informations necessaires pour le l'Extrait</span>
            <div class="div1">
                <label for="date_mariage" style="color: black;">Date de mariage : &nbsp;</label>
                <input type="date" id="" name="date_mariage" value="<?= $mar['date_mariage'] ?>">
            </div>
            <div class="div1">
                <label for="nom_mairie" style="color: black;">Nom de la Mairie : &nbsp;</label>
                <input type="text" id="" name="nom_mairie" value="<?= $mar['nom_mairie'] ?>">
            </div>
            <div class="div1">
                <label for="nom_epous" style="color: black;">Nom de l'epous : &nbsp;</label>
                <input type="text" id="" name="nom_epous" value="<?= $mar['nom_epous'] ?>">
            </div>
            <div class="div1">
                <label for="prenom_epous" style="color: black;">Prenom de l'epous : &nbsp;</label>
                <input type="text" id="" name="prenom_epous" value="<?= $mar['prenom_epous'] ?>">
            </div>
            <div class="div1">
                <label for="nom_epouse" style="color: black;">Nom de l'epouse : &nbsp;</label>
                <input type="text" id="" name="nom_epouse" value="<?= $mar['nom_epouse'] ?>">
            </div>
            <div class="div1">
                <label for="prenom_epouse" style="color: black;">Prenom de l'epouse : &nbsp;</label>
                <input type="text" id="" name="prenom_epouse" value="<?= $mar['prenom_epouse'] ?>">
            </div>
            <div class="div1">
                <label for="regime" style="color: black;">Regime Matrimonial : &nbsp;</label>
                <input type="text" id="" name="regime" value="<?= $mar['regime_matrimoniale'] ?>">
            </div>
            <div class="div1">
                <label for="date_demande" style="color: black;">Date de la demande : &nbsp;</label>
                <input type="date" id="" value="<?= $mar['date_demande'] ?>">
            </div>
            <div>
                <button type="submit" name='submit'>
                    Envoyer
                </button>
            </div>
        </form>
    </div>

    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>
</body>