<?php
    require_once 'connect.php';
    if(isset($_GET['idname'])){
        $id=$_GET['idname'];
    }
    if (isset($_POST)) {
        $Pnom=$_POST['nom'];
        $Pprenom=$_POST['prenom'];
        $Pgenre=$_POST['genre'];
        $Page=$_POST['age'];
        $Pemail=$_POST['email'];
        $Pmot_de_passe=$_POST['mot_de_passe'];
    }
    $requet=$bd->prepare("UPDATE etudiant SET nom='$Pnom',prenom='$Pprenom',genre='$Pgenre',age='$Page',email='$Pemail',mot_de_passe='$Pmot_de_passe' WHERE id= '$id' ");
    $requet->execute();

    if (isset($requet)){
        header('location: view.php');
    }

?>
<?php //include_once'view.php' ?>

