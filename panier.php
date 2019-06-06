<?php 
	session_start();
	$pseudo = $_SESSION["pseudo"];
	$prix   = $_POST["prix"];
	$nom    = $_POST["nom"];
	
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$requete = "INSERT INTO KunuPanier VALUES ('$pseudo','$nom','$prix','');";


	$exec = mysqli_query($connexion, $requete);
	
	
	mysqli_close($connexion);
	


?>
