<?php require "db_connector.php"; ?>

<?php

if (isset($_POST)) {
    if (
        isset($_POST["nomUt"]) && !empty($_POST["nomUt"])
        && isset($_POST["emailUt"]) && !empty($_POST["emailUt"])
        && isset($_POST["mdpUt"]) && !empty($_POST["mdpUt"])
        && isset($_POST["nivUt"]) && !empty($_POST["nivUt"])
    ) {
        $nom = $_POST['nomUt'];
        $email = $_POST["emailUt"];
        $password = $_POST["mdpUt"];
        $nivUt  = $_POST["nivUt"];
        $query = mysqli_query($conn, "INSERT INTO utilisateurs(Nom, email, mot_de_passe, type_user) VALUES ('$nom', '$email', '$password', '$nivUt');");
    }
}

if (isset($_SET['delid'])) {
    $delid = $_GET['delid'];
    $sql = mysqli_query($conn, "DELETE FROM utilisateurs WHERE id = $delid");
    echo "Utilisateur supprimer avec succès";
}


// pour les authentification en utilisant location et se basant sur le type d'user et nb : crypter forcement les mots de passe 
// $nom = $_POST["nomUt"];
// $email = $_POST["emailUt"];
// $mdp = password_hash($_POST["mdpUt"], PASSWORD_DEFAULT);
// $type_user = $_POST["nivUt"];

// $sql = "INSERT INTO utilisateurs (Nom, email, mot_de_passe, type_user) VALUES (:nom, :email, :mdp, :type_user);";

// Notion d'aliasse

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription</title>

    <link rel="stylesheet" href="/autres/style.scss">
</head>

<body>

    <!-- La fonction md5() permet de crypter les mots de passe -->
    <div class='retablir'>
        <form method="post" action="">
            <div class="former">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nomUt">
                </div>

                <div>
                    <label for="email">Email :</label>
                    <input type="text" id="email" name="emailUt">
                </div>

                <div>
                    <label for="mdp">Mot de passe:</label>
                    <input type="password" id="mpd" name="mdpUt">
                    <!-- se sont les names qui permettent de recuperer des valeurs  -->
                </div>

                <div>
                    <label for="type">Niveau utilisateur:</label>
                    <input type="text" id="type" name="nivUt">
                </div>

                <div>
                    <button type="submit">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>


        <!-- tableau pour affficher  -->


        <div class="tableau">
            <table>
                <thead>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Type User</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT DISTINCT * FROM utilisateurs");
                    foreach ($result as $user) {
                    ?>
                        <tr>
                            <td> <?= $user['Nom']; ?> </td>
                            <td> <?= $user['email']; ?> </td>
                            <td> <?= $user['type_user']; ?> </td>
                            <td>
                                <a href="read.php?viewId=<?php echo $user["id"] ?>">Voire</a>

                                <a href="read.php?viewId=<?php echo $user["id"] ?>">Modifier </a>

                                <a href="utilisateurs.php?delid=<?= $user['id'] ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>