<?php
session_start();
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	$recev = $_POST["idNom"];
	$envoi = $_SESSION["pseudo"];
	$message = $_POST["message"];
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	if ($recev <> ""){
	$requete = "INSERT INTO KunuMessage VALUES ('$envoi','$recev','$message','');";


	$exec = mysqli_query($connexion, $requete);
	}
	mysqli_close($connexion);
	header('Location: Accueil.php');

?>
