<?php

if(isset($_POST['saison']) && isset($_POST['pays']) && isset($_POST['division'])){
	$saison = htmlspecialchars($_POST['saison']);
	$pays = htmlspecialchars($_POST['pays']);
	$division = htmlspecialchars($_POST['division']);

	$_SESSION['saison'] = $saison;
	$_SESSION['pays'] = $pays;
	$_SESSION['division'] = $division;

	$smarty->assign("saison", $saison);
	$smarty->assign("pays", $pays);
	$smarty->assign("division", $division);
	$smarty->display('ajout_match_championnat.tpl');

	if(isset($_SESSION['saison']) && isset($_SESSION['pays']) && isset($_SESSION['division'])){

		$saison = htmlspecialchars($_SESSION['saison']);
		$pays = htmlspecialchars($_SESSION['pays']);
		$division = htmlspecialchars($_SESSION['division']);

		$champ = $championnat_manager->getChampionnat2($saison, $pays, $division);

		$message ="";
		if(isset($_POST['generer_match_aleat'])){
			$random->generer_calendrier($champ);
		}
		else if (isset($_POST['generer_score'])){
			$random->generer_score_aleatoire($champ);
		}
		else if(isset($_POST['afficher_calendrier'])){
			$matchs = $match_championnat_manager->getAllMatchChampionnats($champ->id_championnat());
			$liste_matchs = [];
			if(sizeOf($matchs) == 0){
				$message = "Aucun match prévus";
			} else {
				foreach($matchs as $match){
					$liste_matchs[] = array(
						'id_match_championnat' => $match->id_match_championnat(),
						'id_equipe_visiteur' => $match->id_equipe_visiteur(),
						'id_equipe_domicile' => $match->id_equipe_domicile(),
						'date_match_championnat' => $match->date_match_championnat(),
						'buts_equipe_visiteur' => $match->buts_equipe_visiteur(),
						'buts_equipe_domicile' => $match->buts_equipe_domicile(),
						'arbitre1' => $arbitre_manager->getArbitre($match->id_arbitre1())->nom().' '.prenom(),
						'arbitre2' => $arbitre_manager->getArbitre($match->id_arbitre2())->nom().' '.prenom(),
						'arbitre3' => $arbitre_manager->getArbitre($match->id_arbitre3())->nom().' '.prenom(),
						'arbitre4' => $arbitre_manager->getArbitre($match->id_arbitre4())->nom().' '.prenom(),
						'remplacant' => $arbitre_manager->getArbitre($match->id_remplacant())->nom().' '.prenom()
						);
				}
				$message = "Liste des Matchs";
			}
			$smarty->assign("message", $message);
			$smarty->assign("matchs", $matchs);
			$smarty->display('matchs_championnat.tpl');
		} 
		else if(isset($_POST['afficher_classement'])){
			$matchs = $match_championnat_manager->getAllMatchChampionnats($champ->id_championnat());
			if(sizeOf($matchs) == 0){
				$message = "Aucun classement";
			} else {
				$message = "Classement";
			}
			$smarty->assign("message", $message);
			$smarty->assign("matchs", $matchs);
			$smarty->display('classement.tpl');
		}
	} else {
	header('Location: selection_championnat_controller.php');
	}
}
