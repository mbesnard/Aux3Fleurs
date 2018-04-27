<?php
session_start();
$host = "localhost"; # Hôte
$dbname = "aux3fleurs"; # Nom de la base de donnée
$user = "root"; # Nom d'utilisateur
$password = ""; # Mot de passe

try {
    $connect = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur :'.$e->getMessage());
}
				 
		$username=$_POST["username"];
		$password=$_POST["password"];
		
$s = $connect->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
				 $s->execute(array(
		            'username'=> $username, 
		            'password' => $password, ));

header('Location: connexion.php');

				 ?>