<?php
// Connexion à la base de données
//$servername = "localhost";
//$username = "nom_utilisateur";
//$password = "mot_de_passe";
//$dbname = "nom_base_de_donnees";

// $conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
    //die("La connexion a échoué : " . $conn->connect_error);
//}

// Récupération des données à insérer (supposons que les données soient envoyées via la méthode POST)
//$nom = $_POST['nom'];
//$email = $_POST['email'];

// Requête d'insertion
//$sql = "INSERT INTO nom_table (nom, email) VALUES ('$nom', '$email')";

// if ($conn->query($sql) === TRUE) {
//     echo "Enregistrement inséré avec succès.";
// } else {
//     echo "Erreur lors de l'insertion : " . $conn->error;
// }

// Fermeture de la connexion
//$conn->close();
?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include_once 'navbar.php';?>
    <div class="container">
        <div class="row pt-4">
            <form action="postIndex.php" method="POST">
                <h2>Bienvenu</h2>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input1" class="col-sm2 control-label">Nom:</label>
                        <input type="text" name="nom" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input2" class="col-sm2 control-label">Prenom:</label>
                        <input type="text" name="prenom" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input3" class="col-sm2 control-label">Âge:</label>
                        <input type="text" name="age" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input4" class="col-sm2 control-label">Email:</label>
                        <input type="text" name="email" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input5" class="col-sm2 control-label">Mot de passe:</label>
                        <input type="password" name="mot_de_passe" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input4" class="col-sm2 control-label">Genre:</label>
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="genre" id="genre" value="homme" checked> Homme
                        </label>
                        <label>
                            <input type="radio" name="genre" id="genre" value="femme"> Femme
                        </label>
                    </div>
                </div>
                <div class="pt-4">
                    <input type="submit" value="submit" class="btn btn-primary">
                    <a href="view.php">
                        <button class="btn btn-success" type="button">Voir la liste</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>