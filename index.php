<?php
//index.php : va tout centraliser

//on récupère le paramètre qui nous indique quel controleur appeler
//URL : index.php?c=CDA&param1=val1&param2=val2...
if(isset($_GET['c'])){
	$ctrl = $_GET['c'];
}
else{
	$ctrl = NULL;
}

switch($ctrl){
	case 'CDM':
		include('controleur/modif_animal.php');
		break;
	case 'CDS':
		include('controleur/formulaire_supp.php');
		break;
	case 'CDA':
		include('controleur/formulaire_ajout.php');
		break;
	default:
		include('liste_animaux.php');
		//die('Cette page n\'existe pas');
		break;
}
?>