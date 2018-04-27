<?php
session_start();

$host = "localhost"; # Hôte
$dbname = "aux3fleurs"; # Nom de la base de donnée
$user = "root"; # Nom d'utiliseur
$password = ""; # Mot de passe

try {

	$bdd = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

if(isset($_SESSION['id']))
{
	$aInfo = $bdd->prepare("SELECT * FROM users WHERE id = ?");
	$aInfo->execute(array($_SESSION['id']));
	$rowcPseudo = $aInfo->rowCount();
	if($rowcPseudo == 1)
	{
		$info = $aInfo->fetch();
		$_SESSION['id'] = $info['id'];
		$_SESSION['username'] = $info['username'];
	}
	
}
?>