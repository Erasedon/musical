<?php 
    include "connexion.php";


    $nomm=$_POST['nomm'];
    $pseudo=$_POST['pseudo'];
    $typem=$_POST['typem'];
    $nomm=$_POST['nomm'];
    $nomm=$_POST['nomm'];
    $fichier=$_POST['Fichier'];

    $envoim = $db->prepare("INSERT INTO `musique`(`nomm`, `typem`,`img`) VALUES ('$nomm','$typem','$fichier')");
    $envoia = $db->prepare("INSERT INTO `artiste`(`pseudo`) VALUES ('$pseudo')");
    $envoim->execute();
    $envoia->execute();

    header('location: ../../landing.php');

?>

