<?php
session_start();


	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$pseudo = $_SESSION['pseudo'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$postal = $_POST['postal'];
	$pays = $_POST['pays'];
	$mdp = $_POST['mdp'];


	
	if ($email <> "") {
		echo "je passe dans le if";
		$requete = "UPDATE KunuInscrit SET email = '$email' WHERE pseudo ='$pseudo';";
		$exec = mysqli_query($connexion, $requete);
	}
	if ($adresse <> "") {
		echo "je passe dans le if";
		$requete = "UPDATE KunuInscrit SET adresse = '$adresse' WHERE pseudo ='$pseudo';";
		$exec = mysqli_query($connexion, $requete);
	}
	if ($postal <> "") {
		echo "je passe dans le if";
		$requete = "UPDATE KunuInscrit SET code_postal = '$postal' WHERE pseudo ='$pseudo';";
		$exec = mysqli_query($connexion, $requete);
	}
	if ($pays <> "") {
		echo "je passe dans le if";
		$requete = "UPDATE KunuInscrit SET pays = '$pays' WHERE pseudo ='$pseudo';";
		$exec = mysqli_query($connexion, $requete);
	}
	if ($mdp <> "") {
		echo "je passe dans le if";
		$requete = "UPDATE KunuInscrit SET mdp = '$mdp' WHERE pseudo ='$pseudo';";
		$exec = mysqli_query($connexion, $requete);
	}
	
	
	
	
	
	
	mysqli_close($connexion);

	header('location: info.php');

?>	


