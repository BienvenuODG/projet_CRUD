<?php include_once 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="all.min.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <title>Document</title>
</head>
<body>
    <?php include_once 'navbar.php';
        $getData=$_GET;
    ?>
    <?php
        //include_once 'controle_recette.php';
        // Récupération des résultats
        $requete = $bd->prepare("SELECT id,nom,prenom,genre,age,email FROM etudiant ");
        $requete->execute([
            //'id'=>$getData['id']
        ]);
        $resultats = $requete->fetchAll();

        // Affichage des résultats

    ?>
    <div class="container">
        <div class="row pt-4">
            <h2>Bienvenue</h2>
            <a href="index.php"><button class="btn btn-primary">Ajouter un étudiant</button> </a>
            <div>
                <table class="table table-striped mt-3">
                    <tr>
                        <th>Id</th>
                        <th>Nom & Prenom</th>
                        <th>Genre</th>
                        <th>Âge</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                        <?php foreach ($resultats as $resultat) {?>
                            <tr>
                                <td> <?php echo $resultat['id']?> </td>
                                <td> <?php echo $resultat['nom'] ."  ".$resultat['prenom']  ?> </td>
                                <td> <?php echo $resultat['genre'] ?> </td>
                                <td> <?php echo $resultat['age'] ?> </td>
                                <td> <?php echo $resultat['email'] ?> </td>
                                <td>
                                    <a href="update.php?id=<?php echo $resultat['id']?>" class="m m-lg-3"><i class="fa-solid fa-user-pen"></i></a>
                                    <a href="delete.php?id=<?php echo $resultat['id']?>"><i class="fa-solid fa-trash-can" style="color: #ff2222;" data-bs-toggle="modal" data-bs-target="#exempleModal <?php echo $resultat['id'] ?>" ></i></a>
                                </td>
                                <!-- <div class="modal fade" id="exempleModal <?php echo $resultat['id']?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Voullez vous vraiment supprimer cet étudiant de la liste?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                                <a href="delete.php?id=<?php echo $resultat['id'] ?>">
                                                    <button type="button" class="btn btn-danger">Confirmer</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </tr>
                        <?php }?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="all.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>