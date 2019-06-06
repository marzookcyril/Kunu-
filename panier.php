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
	
	$requete = "SELECT * FROM KunuPanier WHERE pseudo = '$pseudo' AND nom = '$nom';";
	$exec = mysqli_query($connexion, $requete);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
    $array[] = $row;
		}
	
	
	if (count($array) <> 0){
		$quantite = 1 + $array[0]["quantite"];
		$id = $array[0]["id"];
		$requete1 = "UPDATE KunuPanier SET quantite = '$quantite' WHERE id = '$id';";
		$exec1 = mysqli_query($connexion, $requete1);
	} else {
		$requete1 = "INSERT INTO KunuPanier VALUES ('$pseudo','$nom','$prix','','1');";
		$exec1 = mysqli_query($connexion, $requete1);
	}


		
	
	mysqli_close($connexion);
	


?>
