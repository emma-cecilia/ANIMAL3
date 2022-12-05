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
	$requete=$bdd->prepare('DELETE FROM animal WHERE id=:id');
	$requete->execute(array('id'=>$idA));
	$animal=$requete->fetchObject();
	if($animal){
	
	echo"supression : ".$idA." réussi";
	echo'<br><a href="../liste_animaux.php">retourner?</a>';
	}
}
?>