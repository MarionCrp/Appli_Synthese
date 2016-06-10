<?php
	if(isset($_SESSION['saison']) && isset($_SESSION['pays']) && isset($_SESSION['division'])){
		$saison = htmlspecialchars($_SESSION['saison']);
		$pays = htmlspecialchars($_SESSION['pays']);
		$division = htmlspecialchars($_SESSION['division']);

		$champ = $championnat_manager->getChampionnat2($saison, $pays, $division);

		//$random->generer_calendrier($champ);
		$random->generer_score_aleatoire($champ);


		//unset($_SESSION['saison']);
	} else {
		echo 'rah';
	}