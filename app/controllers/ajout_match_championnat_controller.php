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
	
} else {

	header('Location: selection_championnat_controller.php');
}
