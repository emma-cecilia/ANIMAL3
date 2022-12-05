<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de notre animal
if(!isset($_GET['idAnimal'])){
	header('Location:../liste_animaux.php');
}else{
	$idA=$_GET['idAnimal'];
	$requete=$bdd->prepare('SELECT * FROM animal WHERE id=:id');
	$requete->execute(array('id'=>$idA));
	$animal=$requete->fetchObject();
	include('../View/formulaire_modif.phtml');
}
?>