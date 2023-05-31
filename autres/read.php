<?php require "db_connector.php"; ?>


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
            <?php
            $id = $_GET['viewId'];
            $result = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE id = $id");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="former">
                    <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="nomUt" value="<?= $row["Nom"] ?>">
                    </div>

                    <div>
                        <label for="email">Email :</label>
                        <input type="text" id="email" name="emailUt" value="<?= $row["email"] ?>">
                    </div>

                    <div>
                        <label for="mdp">Mot de passe:</label>
                        <input type="password" id="mpd" name="mdpUt" disabled>
                        <!-- se sont les names qui permettent de recuperer des valeurs  -->
                    </div>

                    <div>
                        <label for="type">Niveau utilisateur:</label>
                        <input type="text" id="type" name="nivUt" value="<?= $row["type_user"] ?>">
                    </div>

                    <div>
                        <button type="submit">
                            Envoyer
                        </button>
                    </div>
                </div>
            <?php
            }
            ?>
        </form>


        <!-- tableau pour affficher  -->



    </div>

</body>

</html>