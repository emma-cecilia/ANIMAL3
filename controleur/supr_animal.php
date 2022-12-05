<?php

$idA=$_POST['idAnimal'];

try{
	$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}


//récupérant l'ID de notre animal


if(isset($_POST['idAnimal'])){
	$idA=$_POST['idAnimal'];
	$requete=$bdd->prepare('SELECT* FROM animal WHERE id=:id');
	$requete->execute(array('id'=>$idA));
	$animal=$requete->fetchObject();
	var_dump($requete);
	
	
	if(is_object($animal)){
		$requete=$bdd->prepare('DELETE FROM animal WHERE id=:id');
		$requete->execute(array('id'=>$idA));
		
		
		
		echo "<script type='text/javascript'>alert('Animal supprimer avec succès');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	}
	elseif($idA=$_POST['idAnimal']==""){
		echo "<script type='text/javascript'>alert('Veuillez selectionnez un Id');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
		
	}
	
	else{
		echo "<script type='text/javascript'>alert('Animal non existant');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	}
	
	
	
	
	/* if($return==false){
		echo "<script type='text/javascript'>alert('Animal non existant');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	}
	else{
		var_dump($idA=$_POST['idAnimal']);
		$requete=$bdd->prepare('DELETE FROM animal WHERE id=:id');
		$requete->execute(array('id'=>$idA));
		
		$animal=$requete->fetchObject();
		
		echo "<script type='text/javascript'>alert('Animal supprimer avec succès');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
	} */
}

?>

	
 
	