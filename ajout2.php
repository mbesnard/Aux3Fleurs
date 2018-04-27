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

//récupération des valeurs des champs:
//nom:
$nom = $_POST["nom"] ;
$description = $_POST["description"] ;
$prix = $_POST["prix"] ;
$image = $_POST["image"] ;

$req = $bdd->prepare("INSERT INTO compositions (nom, description, prix, image) VALUES (:nom, :description, :prix, :image)");
$req->execute(array(
		"nom" => $nom,
		"description" => $description,
		"prix" => $prix,
		"image" => $image,
));

header('Location: mcompositions.php')
?>