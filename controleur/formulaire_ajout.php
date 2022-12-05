<?php
//controllerDetailsAnimal.php
//on appel le model animal
require('../model/formulaire_ajout.php');// .class.php pour bien identifier les class

//et ici on va faire nos traitements
if(isset($_POST['submit'])){
$monAnimal = new Animal(NULL,$_POST['espece'],
$_POST['date_naissance'],
$_POST['nom'],
$_POST['commentaires'],
$_POST['sexe']);

$retour=$monAnimal->setAnimal();
if($retour){
	echo "Insertion reussie <br>";
	echo'<a href="../liste_animaux.php">retourner?</a>';
}
else{
	echo "insertion échouée";
}
}
//on récupère l'id de l'animal
// $idAnimal = $_GET['idAnimal'];
//on récupère les données de l'animal
// $monAnimal->getAnimalById($idAnimal);
//on appelle la vue
include('../view/formulaire_ajout.phtml');
?>