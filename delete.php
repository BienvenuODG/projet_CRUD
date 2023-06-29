<?php include_once 'connect.php'?>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $reque= $bd->prepare("DELETE FROM etudiant WHERE id='$id' ");
    $reque->execute();
    if (isset($reque)){
        header('location: view.php');
    }
?>