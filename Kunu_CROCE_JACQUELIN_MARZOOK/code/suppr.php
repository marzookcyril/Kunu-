<?php
	session_start();
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	$pseudo = $_SESSION["pseudo"];

	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$requete = "DELETE FROM KunuPanier WHERE pseudo ='$pseudo'";
	$exec = mysqli_query($connexion, $requete);
	 	header('Location: pagePanier.php');

	
	
?>
