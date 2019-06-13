<?php
session_start();
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$_SESSION["pseudo"] = $_POST["pseudo"];
	
	$pseudo = $_POST["pseudo"];
	$email = $_POST["email"];
	$date = $_POST["date"];
	$adresse = $_POST["adresse"];
	$postal = $_POST["postal"];
	$pays = $_POST["pays"];
	$prenom = $_POST["prenom"];
	$nom = $_POST["nom"];
	$mdp = $_POST["mdp"];
	$mdpp = md5($mdp);
	// Connexion via mysqli procedural
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$requete = "INSERT INTO KunuInscrit VALUES('$pseudo','$nom','$prenom','$email','$date','$pays','$adresse','$postal','$mdpp');";

	
	// Execution d'une requete
	$exec = mysqli_query($connexion, $requete);

	
	// Deconnexion
	mysqli_close($connexion);
	header('Location:FrontHand/kunu2.php');

?>
