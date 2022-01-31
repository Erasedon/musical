<?php
if(isset($_GET['typem'])){
    $typechoix = $_GET['typem'];
    //echo $sectionChoisi;

try{
	$db=new PDO('mysql:host=localhost;dbname=musical','root','');
    $reponse = $db->query('SELECT nomm from musique WHERE typem=\'' . $typechoix . '\'');

} catch(PDOException $e){
	die('Erreur:'.$e->getMessage());
}
}
?>	