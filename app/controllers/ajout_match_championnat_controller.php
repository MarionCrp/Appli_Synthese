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
			$matchs = $match_championnat_manager->getAllMatchChampionnats($champ->id_championnat());
			var_dump(sizeOf($matchs));
			$message ="toto";
			if(isset($_POST['generer_match_aleat'])){
				$random->generer_calendrier($champ);
				$message = "Génération du calendrier :";
			}
			else if (isset($_POST['generer_score'])){
				$random->generer_score_aleatoire($champ);
			}
			$smarty->assign("message", $message);
			$smarty->display('matchs_championnat.tpl');
		}
	
} else {
	header('Location: selection_championnat_controller.php');
}
