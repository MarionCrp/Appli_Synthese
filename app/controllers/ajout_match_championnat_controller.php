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
}
elseif(isset($_SESSION['saison']) && isset($_SESSION['pays']) && isset($_SESSION['division'])){
		$smarty->display('ajout_match_championnat.tpl');
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
					$arbitre1 = $arbitre_manager->getArbitre($match->id_arbitre1());
					$arbitre2 = $arbitre_manager->getArbitre($match->id_arbitre2());
					$arbitre3 = $arbitre_manager->getArbitre($match->id_arbitre3());
					$arbitre4 = $arbitre_manager->getArbitre($match->id_arbitre4());
					$score1 = $match->buts_equipe_visiteur();
					$score2 = $match->buts_equipe_domicile();
					if($score1 == null){
						$score1 = "-";
						$score2 = "-";
					}
					$remplacant = $arbitre_manager->getArbitre($match->id_remplacant());
					$liste_matchs[] = array(
						'id_match_championnat' => $match->id_match_championnat(),
						'equipe_visiteur' => $equipe_manager->getEquipe($match->id_equipe_visiteur())->libelle_equipe(),
						'equipe_domicile' => $equipe_manager->getEquipe($match->id_equipe_domicile())->libelle_equipe(),
						'date_match_championnat' => $match->date_match_championnat(),
						'buts_equipe_visiteur' => $score1,
						'buts_equipe_domicile' => $score2,
						'arbitre1' => $arbitre1->nom().' '.$arbitre1->prenom(),
						'arbitre2' => $arbitre2->nom().' '.$arbitre2->prenom(),
						'arbitre3' => $arbitre3->nom().' '.$arbitre3->prenom(),
						'arbitre4' => $arbitre4->nom().' '.$arbitre4->prenom(),
						'remplacant' => $remplacant->nom().' '.$remplacant->prenom()
						);
				}
				$message = "Liste des Matchs";
			}
			$smarty->assign("message", $message);
			$smarty->assign("liste_matchs", $liste_matchs);
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
	}
else {
	header('Location: selection_championnat_controller.php');
	}

