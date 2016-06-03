<?php
class EquipeManager extends Manager {

	/**
	 * Class Constructor
	 */
	public function __construct($pdo)
	{
		parent::__construct($pdo);
	}

	public function getEquipe($id){
		$req = $this->pdo->prepare('SELECT * FROM AS_equipe WHERE id_equipe = :id');
		$req->execute(array(
			'id' => $id
			));
		if($datas = $req->fetch(PDO::FETCH_ASSOC)) return new Equipe($datas);
		else throw new Exception('Equipe non trouvée');
	}


	public function getAllEquipes(){
		$array = array();
		$req = $this->pdo->prepare('SELECT * FROM AS_equipe order by libelle_equipe');
		$req->execute();
		while ($data = $req->fetch()){
			$array[] = new Equipe([
				'id_equipe' => $data['id_equipe'],
				'id_championnat' => $data['id_championnat'],
				'libelle_equipe' => $data['libelle_equipe']
				]);
		}
		return $array;
	}
	
	public function ajoutEquipe($id_equipe, $id_championnat, $libelle_equipe){
		$req = $this->pdo->prepare('INSERT INTO AS_equipe 
			(id_equipe, id_championnat, libelle_equipe) VALUES (:id_equipe, :id_championnat, :libelle_equipe');
		$req->execute(array(
				'id_equipe' => $id_equipe,
				'id_championnat' => $id_championnat,
				'libelle_equipe' => $libelle_equipe
		));
		
		if (!$req) throw new Exception("Erreur lors de l'ajout de l'équipe");
		else echo "<p class=\"success\">L'équipe a été ajouté</p>";	
	}
	
	public function modificationChampionnat($id_equipe, $id_championnat){
		// On vérifie si l'entrée complète est déjà en base de données ou non
		$q = $this->_db->prepare('SELECT COUNT(*) as nb FROM AS_equipe
												  WHERE id_equipe = :id_equipe');
		$q->execute(array(
			'id_equipe' => $id_equipe,
			'id_championnat' => $id_championnat
			));
			
		$data = $q->fetchColumn();
		// Si elle n'est pas en base de donnée :
		if (!$data) throw new Exception("L'équipe demandée n'existe pas");
		else {
			$q = $this->_db->prepare('UPDATE AS_equipe
										SET id_championnat = :id_championnat');
			$q->execute(array(
				'id_championnat' => $id_championnat,
				));
				
			if (!$req) throw new Exception("Erreur lors du changement de championnat pour l'équipe");
			else echo ("<p class=\"success\">Le championnat auquel participe l'équipe a bien été modifié</p>");	
		}
	}

	public function getEquipesDeDivision($id_championnat){
		$q = $this->pdo->prepare('SELECT * FROM AS_equipe WHERE id_championnat = :id_championnat');
		$q->execute(array(
			'id_championnat' => $id_championnat
			));
		while ($data = $q->fetch()){
			$equipes[] = new Equipe([
				'id_equipe' => $data['id_equipe'],
				'id_championnat' => $data['id_championnat'],
				'libelle_equipe' => $data['libelle_equipe']
				]);
		}
		return $equipes;
	}


}