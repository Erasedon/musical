<?php 
    include "connexion.php";


    $nomm=$_POST['nomm'];
    $pseudo=$_POST['pseudo'];
    $typem=$_POST['typem'];
    $nomm=$_POST['nomm'];
    $nomm=$_POST['nomm'];

    $envoim = $db->query("INSERT INTO `musique`(`nomm`, `typem`) VALUES ('$nomm','$typem')");
    $envoia = $db->query("INSERT INTO `artiste`(`pseudo`) VALUES ('$pseudo')");

    header('location: ../../index.php');

?>

