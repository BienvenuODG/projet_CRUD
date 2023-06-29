<?php
    require_once 'connect.php';
    $id=$_GET['id'];
    $selSql=$bd->prepare("SELECT* FROM etudiant WHERE id='$id' ");
    $selSql->execute();
    $res = $selSql->fetchAll();
    if (isset($_POST) && !isset($_POST) ) {
        $Vnom=$_POST['nom'];
        $Vprenom=$_POST['prenom'];
        $Vgenre=$_POST['genre'];
        $Vage=$_POST['age'];
        $Vemail=$_POST['email'];
        $Vmot_de_passe=$_POST['mot_de_passe'];
    }
    $requet=$bd->prepare("UPDATE etudiant SET nom='$Vnom',prenom='$Vprenom',genre='$Vgenre',age='$Vage',email='$Vemail',mot_de_passe='$Vmot_de_passe' WHERE id='$id' ");
    $requet->execute();
    // if (isset($requet)){
    //     header('location: view.php');
    // }

?>
<?php //include_once'view.php' ?>
