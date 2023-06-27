<?php
    // Connection a la base de donnée (test)
    try {
        $bd= new PDO("mysql:host=localhost;dbname=mon_projet", "root", "");
        // echo("Connection réussit") ."<br/>";
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }
?>