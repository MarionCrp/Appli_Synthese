<?php
class ChampionnatManager extends Manager {

	/**
	 * Class Constructor
	 */
	public function __construct($pdo)
	{
		parent::__construct($pdo);
	}

	/**
	* Récupère un championnat en fonction de son Id
	*
	* @param $id int
	*
	* @return Arbitre
	**/
	public function getChampionnat($id){
		$req = $this->pdo->prepare('SELECT * FROM AS_championnat WHERE id_championnat = :id');
		$req->execute(array(
			'id' => $id
			));
		if($datas = $req->fetch(PDO::FETCH_ASSOC)) return new Equipe($datas);
		else throw new Exception('Championnat non trouvé');
	}

	/**
	* Récupère la liste des objets de type arbitre
	*
	* @return array of Arbitre $array_of_arbitres
	**/
	public function getAllChampionnats(){
		$array = array();
		$req = $this->pdo->prepare('SELECT * FROM AS_championnat order by id_championnat');
		$req->execute();
		while ($data = $req->fetch()){
			$array[] = new Championnat([
				'id_championnat' => $data['id_championnat'],
				'id_division' => $data['id_division'],
				'id_pays' => $data['id_pays'],
				'id_saison' => $data['id_saison'],
				'libelle_championnat' => $data['libelle_championnat']
				]);
 		}
		return $array;
	}


}