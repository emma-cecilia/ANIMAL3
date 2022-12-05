<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
$animaux=$bdd->query('SELECT * FROM animal ORDER BY nom DESC');
//On met le HTML dans un fichiers séparé
include('view/liste_animaux.phtml');
?>