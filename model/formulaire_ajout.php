<?php
//animal.class.php
//model animal
class Animal{
	private $id;
	private $espece;
	private $date_naissance;
	private $nom;
	private $commentaires;
	private $sexe;
	
	public function __construct($id,$espece,$date_naissance,$nom,$commentaires,$sexe)
	{
		$this->id = $id;
		$this->espece = $espece;
		$this->date_naissance = $date_naissance;
		$this->nom = $nom;
		$this->commentaires = $commentaires;
		$this->sexe = $sexe;
	}
	//getters:retournent la valeur de la proprieté demandée
	public function getId() {
		return $this->id;
	}
	public function getEspece() {
		return $this->espece;
	}
	public function getDate_naissance() {
		return $this->date_naissance;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getCommentaires() {
		return $this->commentaires;
	}
	public function getSexe() {
		return $this->sexe;
	}
	//setters
	public function setNom($nom){
		$this->nom = $nom;
	}
	public function setEspece($espece){
		$this->espece = $espece;
	}

//manipulation BDD
	private function connectDatabase(){
		//copier coller!!!!
		try{
		$bdd = new PDO('mysql:host=localhost;dbname=gencongo;charset=utf8', 'root', '');
		return $bdd;
		}catch(Exception $e){
		die('Erreur : ' . $e->getMessage());
		}
	}
//on récupère les informations d'un animal
	public function setAnimal(){
		$bdd = $this->connectDatabase();
		$requete = $bdd->prepare("INSERT
									INTO
									  `animal`(
										`id`,
										`espece`,
										`date_naissance`,
										`nom`,
										`commentaires`,
										`sexe`
									  )
									VALUES(
									  :id,
									  :espece,
									  :date_naissance,
									 :nom,
									  :commentaires,
									  :sexe
									)");
		$retour=$requete->execute(array(
			':id'=>$this->id,
			':espece'=>$this->espece,
			':date_naissance'=>$this->date_naissance,
			':nom'=>$this->nom,
			':commentaires'=>$this->commentaires,
			':sexe'=>$this->sexe
		));
		return $retour;		
		//on detruit l'objet connexion ce qui ferme la connexion à la BDD
		unset($bdd);
	}
}
?>