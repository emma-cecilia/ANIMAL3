<?php


try{
	$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de notre animal
// if(!empty($_POST['nom'])) // teste si le nom n'est pas vide


//if(trim($_POST['nom'])!='' and isset($_POST['date'])){
	$requete=$bdd->prepare('UPDATE animal SET espece=:espece,sexe=:sexe,
	date_naissance=:date,nom=:nom,commentaires=:commentaire WHERE id=:id');
	$requete->execute(array(
		'id'=>$_POST['id'],
		'commentaire'=>$_POST['commentaire'],
		'nom'=>$_POST['nom'],
		'date'=>$_POST['date'],
		'sexe'=>$_POST['sexe'],
		'espece'=>$_POST['espece']
	));
	$animal=$requete->fetchObject();
	var_dump($requete);
	
	
		echo "<script type='text/javascript'>alert('Votre modification a été éffectué avec succès');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
		// echo'MAJ réussie! : ';
		// echo'<a href="liste_animaux.php?idAnimal='.$_POST['id'].'">retourner</a>';
		// echo "<script type='text/javascript'>document.location.replace('formulaire_modif.php?idAnimal='.$_POST['id']'.');</script>";
		// echo'<a href="formulaire_modif.php">retourner?</a>';
	//}
	/* else{
		echo "<script type='text/javascript'>alert('Votre modification a échouée');</script>";
		 echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
		// echo'MAJ échoué! -> ';
		// echo "<script type='text/javascript'>document.location.replace('formulaire_modif.php');</script>";	
		// echo'<a href="formulaire_modif.php?idAnimal='.$_POST['id'].'">retourner</a>';
	}
} */

/*else{
	
	echo "<script type='text/javascript'>alert('Erreur de saisie');</script>";
	// echo"ERREUR de saisie: ";
	// echo "<script type='text/javascript'>document.location.replace('formulaire_modif.php');</script>";
	
	// echo'<a href="formulaire_modif.php?idAnimal='.$_POST['id'].'">reprendre la saisie!</a>';
}*/
?>