<?php 
	session_start();
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$connexion = mysqli_connect($host,$login, $password, $bdd);
	$compte = $_SESSION["pseudo"];
	$nom   = $_POST["idNom"];

	//echo "$nom";
	
	$message = "SELECT Envoi, Recev, Contenu, Id FROM KunuMessage WHERE (Envoi='$compte' AND Recev='$nom') OR (Envoi='$nom' AND Recev='$compte') ;";
	$exec = mysqli_query($connexion, $message);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
    $array[] = $row;
		}
	
	
	
	$size = count($array)-1;
	for ($i=0;$i<=$size;$i++){
		echo ($array[$i][Envoi]);
		echo " : ";
		echo ($array[$i][Contenu]);
		echo " <br/>";
	}

	mysqli_close($connexion);
?>
