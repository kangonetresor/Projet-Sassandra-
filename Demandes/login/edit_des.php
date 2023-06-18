<?php require "../deces/data_base_connector_deces.php";

$num_demande = $_GET["numero_demande"];

if (isset($_POST["submit"])) {

    $ladate = htmlspecialchars($_POST["date_deces"]);
    $nom_d = htmlspecialchars($_POST["nom_p_decedee"]);
    $prenom_d = htmlspecialchars($_POST["prenom_p_decedee"]);
    // $sexe = $_POST["sexe"];
    $nom_pere  = htmlspecialchars($_POST["nom_pere"]);
    $prenom_pere = htmlspecialchars($_POST["prenom_pere"]);
    $nom_mere  = htmlspecialchars($_POST["nom_mere"]);
    $prenom_mere  = htmlspecialchars($_POST["prenom_mere"]);
    $ladatee  = htmlspecialchars($_POST["Date"]);

    $query = mysqli_query($conx, "UPDATE deces SET ladate = '$ladate', Nom_decede = '$nom_d',
    prenom_decede = '$prenom_d', Nom_pere = '$nom_pere',
    prenom_pere =  '$prenom_pere', Nom_mere = '$nom_mere', prenom_mere = '$prenom_mere', Date_demande = '$ladatee' ");

    if ($query) {
        header('Location:confirmation.php');
    } else {
        echo "Erreur" . mysqli_error($conx);
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations UD décès</title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">

    <style>
        .div1>.div1>input {
            align-items: center;
            width: 15px;

        }
    </style>
</head>

<body>

    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Remplir en fonction du bouton UD choisit </em>
        </h1>
    </div>

    <br>

    <?php
    $sql = mysqli_query($conx, "SELECT * FROM deces WHERE numero_demande = '$num_demande'");
    $des = mysqli_fetch_assoc($sql);
    ?>
    <div class="Zone_de_zone">
        <span>
            Modifier l'acte de naissance de numero : <?= $des['numero_demande'] ?>
        </span>
        <form method="post" action="">

            <span>Informations essentielles pour l'acte</span>
            <div class="div1">
                <label for="date_deces" style="color: black;">Date du décès : &nbsp;</label>
                <input type="date" id="" name="date_deces" value="<?php echo $des['ladate']; ?>">
            </div>
            <div class="div1">
                <label for="nom_p_decedee" style="color: black;">Nom de la personne dont vous demandez l'axcte : &nbsp;</label>
                <input type="text" id="" name="nom_p_decedee" value="<?php echo $des['Nom_decede']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_p_decedee" style="color: black;">Prenom de la personne dont vous demandez l'axcte : &nbsp;</label>
                <input type="text" id="" name="prenom_p_decedee" value="<?php echo $des['prenom_decede']; ?>">
            </div>
            <span>Identite des parents</span>
            <div class="div1">
                <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                <input type="text" id="" name="nom_pere" value="<?php echo $des['Nom_pere']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_pere" style="color: black;">Prenom du père : &nbsp;</label>
                <input type="text" id="" name="prenom_pere" value="<?php echo $des['prenom_pere']; ?>">
            </div>
            <div class="div1">
                <label for="nom_mere" style="color: black;">Nom de la mère : &nbsp;</label>
                <input type="text" id="" name="nom_mere" value="<?php echo $des['Nom_mere']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                <input type="text" id="" name="prenom_mere" value="<?php echo $des['prenom_mere']; ?>">
            </div>
            <div class="div1">
                <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                <input type="date" id="Date" name="Date" value="<?php echo $des['Date_demande']; ?>">
            </div>
            <div>
                <button type="submit" name="submit">
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