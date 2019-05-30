<?php
session_start();

	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$_SESSION["pseudo"] = $_POST["pseudo"];
	$mdp = $_POST["mdp"];

	// Connexion via mysqli procedural
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$requete = "SELECT pseudo, mdp FROM KunuInscrit;";
	$exec = mysqli_query($connexion, $requete);
	$i = 0;

	if (mysqli_num_rows($exec) > 0) {
		// On recupere chaque ligne dans un tab associatif
		while ($ligne = mysqli_fetch_assoc($exec)) {
			if ($ligne["pseudo"]  == $_POST["pseudo"] and $ligne["mdp"] == $_POST["mdp"] ){
				$i = $i+1;
			}
		}
	} else echo "Pas de resultat <br/>";
	if ($i > 0) {
		header('Location: Accueil.php');
		}
		else{
		header('Location: KunuDejaInscrit.php');
		}
	
	
	// Deconnexion
	mysqli_close($connexion);
	echo "La requete a été executée";

?>

