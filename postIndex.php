<?php
    require_once 'connect.php';
    if(isset($_POST) && isset($_POST)){
        $Vnom=$_POST['nom'];
        $Vprenom=$_POST['prenom'];
        $Vgenre=$_POST['genre'];
        $Vage=$_POST['age'];
        $Vemail=$_POST['email'];
        $Vmot_de_passe=$_POST['mot_de_passe'];
    }
    $requet=$bd->prepare('INSERT INTO etudiant (nom, prenom, genre, age, email, mot_de_passe) VALUES (:nom, :prenom, :genre, :age, :email, :mot_de_passe )');
    $requet->execute([
        'nom'=>$Vnom,
        'prenom'=>$Vprenom,
        'genre'=>$Vgenre,
        'age'=>$Vage,
        'email'=>$Vemail,
        'mot_de_passe'=>$Vmot_de_passe
    ]);

?>
<?php include_once'view.php' ?>
