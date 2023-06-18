<?php require "../naissances/data_base_connector.php";

$num_demande = $_GET["Numero_demande"];

if (isset($_POST["submit"])) {

    $ladate = htmlspecialchars($_POST["Date"]);
    $nom_e = htmlspecialchars($_POST["nom_enfant"]);
    $prenom_e = htmlspecialchars($_POST["prenom_enfant"]);
    $sexe = htmlspecialchars($_POST["sexe"]);
    $materniter = htmlspecialchars($_POST["materniter"]);
    $date_naissance = htmlspecialchars($_POST["Date_naissance"]);
    $ville_naissance = htmlspecialchars($_POST["ville_naissance"]);
    $nom_pere = htmlspecialchars($_POST["nom_du_pere"]);
    $prenom_pere = htmlspecialchars($_POST["prenom_du_pere"]);
    $nom_mere = htmlspecialchars($_POST["nom_mere"]);
    $prenom_mere = htmlspecialchars($_POST["prenom_mere"]);
    $fonction_pere = htmlspecialchars($_POST["fonction_pere"]);
    $fonction_mere = htmlspecialchars($_POST["fonction_mere"]);
    $habitation_pere = htmlspecialchars($_POST["habitation_pere"]);
    $habitation_mere = htmlspecialchars($_POST["habitation_mere"]);

    $requete =  "UPDATE naissance SET Nom_pere='$nom_pere',
        Prenom_pere='$prenom_pere',
        Nom_mere='$nom_mere',Prenom_mere='$prenom_mere',Fonction_pere='$fonction_pere',Fonction_mere='$fonction_mere',
        Lieu_habitation_pere='$habitation_pere',Lieu_habitation_mere='$habitation_mere',Date_demande='$ladate',
        Nom_e='$nom_e',Prenom_e='$prenom_e',sexe='$sexe', Nom_maternite='$materniter',Date_naissance='$date_naissance',
        Lieu_naissance='$ville_naissance' WHERE Numero_demande = '$num_demande' ";
    $query = mysqli_query($conn, $requete);

    if ($query) {
        header('Location:confirmation.php');
    } else {
        echo "Erreur" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations UD naissance</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../style_naissance.css">
    <link rel="icon" href="../logosassandra.png">
    <style>
        .div1>.div2>input {
            align-items: center;
            width: 15px;

        }
    </style>
</head>

<body>

    <div class="titre">
        <h1 style="text-transform: none;">
            <em> Modifier Les Informations </em>
        </h1>
    </div>

    <br>
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM naissance WHERE Numero_demande = '$num_demande'");
    $naiss = mysqli_fetch_assoc($sql); // 
    ?>

    <div class="Zone_de_zone">
        <span>
            Modifier l'acte de naissance de numero : <?= $naiss['Numero_demande'] ?>
        </span>

        <form method="post" action=""> <!--autocomplate="off" -->

            <span>Informations de la naissance</span>
            <input type="hidden" name='Numero_demande' value="<?php echo ($num_demande); ?>">
            <div class="div1">
                <label for="Date" style="color: black;">Date de demande : &nbsp;</label>
                <input type="date" id="Date" name="Date">
            </div>
            <div class="div1">
                <label for="nom_e" style="color: black;">Nom de l'enfant : &nbsp;</label>
                <input type="text" id="nom_e" name="nom_enfant" value="<?php echo $naiss['Nom_e']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_e" style="color: black;">Prenom de l'enfant : &nbsp;</label>
                <input type="text" id="prenom_e" name="prenom_enfant" value="<?php echo $naiss['Prenom_e']; ?>">
            </div>
            <div class="div1">
                <label for="sexe" style="color: black;"> Sexe : </label>
                <div class="div2">
                    <input type="radio" id="sexe" name="sexe" value="Masculin" require>
                    <label for="sexe" style="color: black;">Masculin</label>
                </div>
                <div class="div2">
                    <input type="radio" id="sexe" name="sexe" value="Feminin">
                    <label for="sexe" style="color: black;">Feminin</label>
                </div>
            </div>
            <div class="div1">
                <label for="nom_martenote" style="color: black;">Maternité : &nbsp;</label>
                <input type="text" id="nom_martenote" name="materniter" value="<?php echo $naiss['Nom_maternite']; ?>">
            </div>
            <div class="div1">
                <label for="Date" style="color: black;">Date de la naissance : &nbsp;</label>
                <input type="date" id="Date" name="Date_naissance" value="<?php echo $naiss['Date_naissance']; ?>">
            </div>
            <div class="div1">
                <label for="lieu_naissance" style="color: black;">Lieu de la naissance : &nbsp;</label>
                <input type="text" id="lieu_naissance" name="ville_naissance" value="<?php echo $naiss['Lieu_naissance']; ?>">
            </div>

            <br>
            <br>

            <span>Informations sur les parents</span>
            <div class="div1">
                <label for="nom_pere" style="color: black;">Nom du père : &nbsp;</label>
                <input type="text" id="nom_pere" name="nom_du_pere" value="<?php echo $naiss['Nom_pere']; ?>">
            </div>
            <div class="div1">
                <label for="nom_mere" style="color: black;">Prenom du père &nbsp;</label>
                <input type="text" id="nom_mere" name="prenom_du_pere" value="<?php echo $naiss['Prenom_pere']; ?>">
            </div>
            <div class="div1">
                <label for="fonction_pere" style="color: black;">Fonction du père : &nbsp;</label>
                <input type="text" id="fonction_pere" name="fonction_pere" value="<?php echo $naiss['Fonction_pere']; ?>">
            </div>
            <div class="div1">
                <label for="habitation_pere" style="color: black;">Lieu d'habitation du père : &nbsp;</label>
                <input type="text" id="habitation_pere" name="habitation_pere" value="<?php echo $naiss['Lieu_habitation_pere']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_pere" style="color: black;">Nom de la mère : &nbsp;</label>
                <input type="text" id="prenom_pere" name="nom_mere" value="<?php echo $naiss['Nom_mere']; ?>">
            </div>
            <div class="div1">
                <label for="prenom_mere" style="color: black;">Prenom de la mère : &nbsp;</label>
                <input type="text" id="prenom_mere" name="prenom_mere" value="<?php echo $naiss['Prenom_mere']; ?>">
            </div>
            <div class="div1">
                <label for="fonction_mere" style="color: black;">Fonction de la mère : &nbsp;</label>
                <input type="text" id="fonction_mere" name="fonction_mere" value="<?php echo $naiss['Fonction_mere']; ?>">
            </div>
            <div class="div1">
                <label for="habitation_mere" style="color: black;">Lieu d'habitation de la mère : &nbsp;</label>
                <input type="text" id="habitation_mere" name="habitation_mere" value="<?php echo $naiss['Lieu_habitation_mere']; ?>">
            </div class="div1">
            <div>
                <button type="submit" name="submit">
                    Modifier
                </button>
            </div>

        </form>
    </div>
    <br>

    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>
</body>

</html>