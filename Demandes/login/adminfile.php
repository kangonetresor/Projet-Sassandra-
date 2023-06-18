<?php include '../naissances/data_base_connector.php' ?>
<?php include '../mariage/data_base_connector_mariage.php'; ?>
<?php require '../deces/data_base_connector_deces.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
    <link rel="icon" href="../logosassandra.png">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="./adminfile.css">
</head>

<body>



    <nav>
        <a href="../../index1.html" class="logo"> <img src="../logosassandra.png">&nbsp; Mairie de Sassandra | Etat Civil</a>

        <ul>
            <input type="text" name="recherche" placeholder="  rechercher"> <button><img src="../../images/search.png" alt=""></button>
        </ul>
    </nav>

    <div>


        <br><br><br> <br><br>

        <!-- <div class="classement">
            <a href="#table_naissance"> Naissance</a>
            <a href="#table_mariage"> Mariage</a>
            <a href="#table_deces"> Deces</a>
        </div> -->


        <p class="titre" id="table_naissance">
            Informations Sur les demandes d'actes de naissances
        </p>
        <br>
        <a class="admin_a" href="./crud_naiss.php"> <img src="../../images/icones/add.png" alt=""> Ajouter une Demande</a>

        <table class="tete">
            <tr>
                <th>Numeros de demande</th>
                <th>¤ Nom et prenom <br> du père <br> ¤ Fonction </th>
                <th>¤ Nom et prenom <br> de la mère <br> ¤ Fonction </th>
                <th>¤ Habitation du père <br> ¤ Habitation de la mère</th>
                <th>Date de la demande</th>
                <th>Nom et prenom <br> de l'enfant </th>
                <th>Genre</th>
                <th>Nom de la marternite</th>
                <th>Date de naissance </th>
                <th>Lieu de naissance</th>
            </tr>
            <?php
            $resutats = mysqli_query($conn, "SELECT * FROM naissance");
            foreach ($resutats as $naiss) {
            ?>
                <tr>
                    <td> <?= $naiss['Numero_demande']; ?> </td>
                    <td> <?= $naiss['Nom_pere']; ?> <?= $naiss['Prenom_pere']; ?> <br> <?= $naiss['Fonction_pere']; ?> </td>
                    <td> <?= $naiss['Nom_mere']; ?> <?= $naiss['Prenom_mere']; ?> <br> <?= $naiss['Fonction_mere']; ?> </td>
                    <td> <?= $naiss['Lieu_habitation_pere']; ?> <br> <?= $naiss['Lieu_habitation_mere']; ?> </td>
                    <td> <?= $naiss['Date_demande']; ?> </td>
                    <td> <?= $naiss['Nom_e']; ?> <?= $naiss['Prenom_e']; ?> </td>
                    <td> <?= $naiss['sexe']; ?> </td>
                    <td> <?= $naiss['Nom_maternite']; ?> </td>
                    <td> <?= $naiss['Date_naissance']; ?> </td>
                    <td> <?= $naiss['Lieu_naissance']; ?> </td>
                    <td><a href="edit_naiss.php?Numero_demande=<?php echo $naiss['Numero_demande'] ?>"><img src="../../images/icones/edit.png" alt=""></a></td>
                    <td><a href="delete_naiss.php?Numero_demande=<?php echo $naiss['Numero_demande'] ?>"><img src="../../images/icones/x.png" alt=""></a></td>
                    <!-- <td><a target="_blank" href="imp_naiss.php?Numero_demande=<?= $naiss['Numero_demande'] ?>">Imp</a> </td> -->

                </tr>
            <?php
            }
            ?>
        </table>


        <br><br><br>

        <p class="titre" id="table_mariage">
            Informations Sur les demandes d'actes de Mariages
        </p>
        <br>
        <a class="admin_a" href="./crud_mar.php"> <img src="../../images/icones/add.png" alt=""> Ajouter une Demande</a>
        <table class="tete1">
            <tr>
                <th>Numeros de demande</th>
                <th>Date de demande</th>
                <th>Date de Mariage</th>
                <th>Mairie</th>
                <th>Nom et prenom <br> de l'epous</th>
                <th>Nom et prenom <br> de l'epouse</th>
                <th>Regime Matrimonial</th>
            </tr>
            <?php
            //inclusion de la page de connexion

            // Requette pour afficheer la liste
            $resutat = mysqli_query($connecter, "SELECT * FROM mariage");
            foreach ($resutat as $marg) {
            ?>
                <tr>
                    <td><?= $marg['numero_demande']; ?></td>
                    <td><?= $marg['date_demande']; ?></td>
                    <td><?= $marg['date_mariage']; ?></td>
                    <td><?= $marg['nom_mairie']; ?></td>
                    <td><?= $marg['nom_epous']; ?> <?= $marg['prenom_epous']; ?></td>
                    <td><?= $marg['nom_epouse']; ?> <?= $marg['prenom_epouse']; ?></td>
                    <td><?= $marg['regime_matrimoniale']; ?></td>
                    <td><a href="edit_mar.php?numero_demande=<?php echo $marg['numero_demande'] ?>"> <img src="../../images/icones/edit.png" alt=""></a></td>
                    <td><a href="delete_mar.php?numero_demande=<?php echo $marg['numero_demande'] ?>"> <img src="../../images/icones/x.png" alt=""></a></td>

                    <!-- <td><button> Imp </button></td> -->
                </tr>
            <?php
            }
            ?>
        </table>

        <br><br><br>

        <p class="titre" id="table_deces">
            Informations Sur les demandes d'actes de Deces
        </p>
        <br>
        <a class="admin_a" href="./crud_des.php"> <img src="../../images/icones/add.png" alt=""> Ajouter une Demande</a>
        <table class="tete">
            <tr>
                <th>Numeros de demande </th>
                <th>Date de demande</th>
                <th>Date de dece</th>
                <th>Nom et Prenom <br> du defunt</th>
                <th>Nom et prenom du <br> père du defunt</th>
                <th>Nom et prenom de <br> la mère du defunt</th>
            </tr>
            <?php
            $re = mysqli_query($conx, "SELECT * FROM deces");
            foreach ($re as $dec) {
            ?>
                <tr>
                    <td><?= $dec['numero_demande']; ?></td>
                    <td><?= $dec['Date_demande']; ?></td>
                    <td><?= $dec['ladate']; ?></td>
                    <td><?= $dec['Nom_decede']; ?> <?= $dec['prenom_decede']; ?></td>
                    <td><?= $dec['Nom_pere']; ?> <?= $dec['prenom_pere']; ?> </td>
                    <td><?= $dec['Nom_mere']; ?> <?= $dec['prenom_pere']; ?></td>
                    <td><a href="edit_des.php?numero_demande=<?php echo $dec['numero_demande'] ?>"> <img src="../../images/icones/edit.png" alt=""></a></td>
                    <td><a href="delete_des.php?numero_demande=<?php echo $dec['numero_demande'] ?>"> <img src="../../images/icones/x.png" alt=""></a></td>

                    <!-- <td><button> Imp </button></td> -->
                </tr>
            <?php
            }
            ?>
        </table>

    </div>

    <footer>
        <div class="copyright" style="display: flex; flex-direction: row;">
            <p>&#169; Copyright Sassandra Tourisme</p>
            <p>2023 Tout droit réservé</p>
        </div>
    </footer>

</body>

</html>