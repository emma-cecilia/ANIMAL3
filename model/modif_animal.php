<?php
try{
	$cnx = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//récupérant l'ID de notre animal
// if(!empty($_POST['nom'])) // teste si le nom n'est pas vide
if(trim($_POST['nom'])!='' and isset($_POST['date'])){
	$requete=$cnx->prepare('UPDATE animal SET espece=:espece,sexe=:sexe,
	date_naissance=:date,nom=:nom,commentaires=:commentaire WHERE id=:id');
	$retour=$requete->execute(array(
		'id'=>$_POST['id'],
		'commentaire'=>$_POST['commentaire'],
		'nom'=>$_POST['nom'],
		'date'=>$_POST['date'],
		'sexe'=>$_POST['sexe'],
		'espece'=>$_POST['espece']
	));
	
	if($retour){
		echo'MAJ réussie! : ';
		echo'<a href="../liste_animaux.php">retourner?</a>';
	}else{
		echo'MAJ échoué! -> ';		
		echo'<a href="../controleur/formulaire_modif.php?idAnimal='.$_POST['id'].'">retourner</a>';
	}
}else{
	echo"ERREUR de saisie: ";
	echo'<a href="../controleur/formulaire_modif.php?idAnimal='.$_POST['id'].'">reprendre la saisie!</a>';
}
?>