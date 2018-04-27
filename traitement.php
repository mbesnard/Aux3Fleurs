<?php
$host = "localhost"; # Hôte
$dbname = "aux3fleurs"; # Nom de la base de donnée
$user = "root"; # Nom d'utiliseur
$password = ""; # Mot de passe

try {
    $connect = new PDO('mysql:host='. $host . ';dbname='. $dbname .';charset=utf8', $user, $password);
}catch(PDOException $e){
	die('Erreur : '.$e->getMessage());
}

		$societe=$_POST['societe'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		$objet=$_POST['objet'];
		$message=$_POST['message'];

$s = $connect->prepare('INSERT INTO formulaire (societe, nom, prenom, email, tel, objet, message) VALUES (:societe, :nom, :prenom, :email, :tel, :objet, :message)');
				 $s->execute(array(
				 	'societe' => $societe,
		            'nom' => $nom,
					'prenom' => $prenom,
					'email' => $email,
					'tel' => $tel,
					'objet' => $objet,
					'message' => $message,));
				 ?>