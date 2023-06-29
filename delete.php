<?php include_once 'connect.php'?>
<?php
    $reque= $bd->prepare('DELETE* FROM etudiant WHERE id= :id');
    $reque->execute([
        'id'=>$resultat['id']
    ]);
?>