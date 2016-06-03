<?php

//Connexion à la base de donnée 

try
{
	$pdo = new PDO('mysql:host=iutdoua-webetu.univ-lyon1.fr;dbname=***;charset=utf8','***','***');
}
catch (Exception $e)
{
	die('Erreur :'.$e->getMessage());
}