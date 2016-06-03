<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';

/**
* Chargement des classes
**/ 
require 'Models/Myautoloader.php';
require 'connexion.php';
$myautoloader = new Myautoloader();
$myautoloader->register();
require_once 'controllers/instanced_managers.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


// Les différentes Routes.
if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	switch ($page) {
		case 'home': 
			$page = 'home';
			break;
		case 'ajout_match_championnat':
			$page = 'ajout_match_championnat';
			break;
		default :
			$page = '404';
			break;
	}
} else {
	$page = 'home';
}
include ('controllers/'.$page.'_controller.php');
