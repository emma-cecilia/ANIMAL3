<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
$animaux=$bdd->query('SELECT id,nom,espece,sexe,date_naissance,commentaires FROM animal');

//On met le HTML dans un fichiers séparé
include('../view/liste_animaux.phtml');
?>