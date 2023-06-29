<?php
    // require_once 'connect.php';
    // $id=$_GET['id'];
    // $selSql=$bd->prepare("SELECT* FROM etudiant WHERE id='$id' ");
    // $selSql->execute();
    // $res = $selSql->fetchAll();
    // if (isset($_POST) && !isset($_POST) ) {
    //     $Vnom=$_POST['nom'];
    //     $Vprenom=$_POST['prenom'];
    //     $Vgenre=$_POST['genre'];
    //     $Vage=$_POST['age'];
    //     $Vemail=$_POST['email'];
    //     $Vmot_de_passe=$_POST['mot_de_passe'];
    // }
    // $requet=$bd->prepare("UPDATE etudiant SET nom='$Vnom',prenom='$Vprenom',genre='$Vgenre',age='$Vage',email='$Vemail',mot_de_passe='$Vmot_de_passe' WHERE id='$id' ");
    // $requet->execute();
    // if (isset($requet)){
    //     header('location: view.php');
    // }

?>
<?php //include_once'view.php' ?>





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
            <form action="postUpdate.php" method="POST">
                <h2>Modification de l'etudiant <?php echo 'n°'.$id;?></h2>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input1" class="col-sm2 control-label">Nom:</label>
                        <input type="text" name="nom" class="form-control" id="" value="<?php echo $res['nom']?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input2" class="col-sm2 control-label">Prenom:</label>
                        <input type="text" name="prenom" class="form-control" id="" value="<?php echo $res['prenom']?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input3" class="col-sm2 control-label">Âge:</label>
                        <input type="text" name="age" class="form-control" id="" value="<?php echo $res['age']?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input4" class="col-sm2 control-label">Email:</label>
                        <input type="text" name="email" class="form-control" id="" value="<?php echo $res['email']?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="input5" class="col-sm2 control-label">Mot de passe:</label>
                        <input type="password" name="mot_de_passe" class="form-control" id="" value="<?php echo $res['mot_de_passe']?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input4" class="col-sm2 control-label">Genre:</label>
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="genre" id="genre" value="homme" checked <?php if( $res['genre']=='homme'){ echo 'checked';} ?>> Homme
                        </label>
                        <label>
                            <input type="radio" name="genre" id="genre" value="femme" <?php if( $res['genre']=='femme'){ echo 'checked';} ?>> Femme
                        </label>
                    </div>
                </div>
                <div class="pt-4">
                    <input type="submit" value="Modifier" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>