<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrait de naissance</title>
    <link rel="stylesheet" href="../style_pdf.css">
</head>

<body>

    <header>
        <div>
            <h2>
                Distrique du <br>
                Bas-Sassandra
            </h2>
            <div>
                <img src="../logosassandra.png">
            </div>
            <h2>
                mairie de <br> sasssandra
            </h2>

            <h1>
                etat civil
            </h1>
        </div>
        <div>
            <h2>
                republique de cote d'ivoire
            </h2>
            <h1>
                Extrait
            </h1>
            <h2>
                du registre des actes de l'etat civil <br>
                pour l'annee "#"
            </h2>
        </div>

    </header>

    <br>

    <div>
        <h2 class="notransform">
            Le : {{ Date_naissance }}
        </h2>
        <h2 class="notransform">
            à la maternite de : {{ materniter }}
        </h2>
        <h2 class="notransform">
            est nee : {{ nom_enfant }} {{ prenom_enfant }}
        </h2>
        <h2 class="notransform">
            de père : {{ nom_du_pere }} {{ prenom_du_pere }} <br>
            ayant pour fonction : {{ fonction_pere }} <br>
            habitant à : {{ habitation_pere }}
        </h2>
        <h2 class="notransform">
            et de mère : {{ nom_mere }} {{ prenom_mere }}<br>
            ayant pour fonction : {{ fonction_mere }} <br>
            habitant à : {{ habitation_mere }}
        </h2>
    </div>

    <br>

    <div class="etape-infos-enfant">
        <h2 style="text-align: initial;"> naissance de : {{ nom_enfant }} {{ prenom_enfant }} </h2>
    </div>

    <br>

    <hr style="margin: 0 25px;">

    <br>

    <footer>
        <h2 class="notransform">
            Delivre, le {{ Date }}
        </h2>
    </footer>

</body>

</html>