<?php 
	session_start();
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$compte = $_SESSION["pseudo"];
	$titre   = $_POST["idTitre"];

		
		
		$voyage = "SELECT * FROM KunuSejour WHERE titre = '$titre';";
		$exec = mysqli_query($connexion, $voyage);
		$array = array();
		while($row = mysqli_fetch_assoc($exec)){
		$array[] = $row;
			}
		
		
		$size = count($array)-1;
		if ($titre <> ''){
			for ($i=0;$i<=$size;$i++){
				echo "<div value='".$array[$i][titre]."'>"."Titre : ".$array[$i][titre]."</div>";
				echo "<div value='".$array[$i][description]."'>"."Description : ".$array[$i][description]."</div>";
				echo "<div value='".$array[$i][prix]."'>"."Prix : ".$array[$i][prix]."€"."</div>";
				echo "<div value='".$array[$i][pseudo]."'>"."Pseudo : ".$array[$i][pseudo]."</div>";
				echo "<div value='".$array[$i][adresse]."'>"."Adresse : ".$array[$i][adresse]."</div>";
				echo "<div value='".$array[$i][code_postal]."'>"."Code postal : ".$array[$i][code_postal]."</div>";
				echo "<div value='".$array[$i][pays]."'>"."Pays : ".$array[$i][pays]."</div>";


			}
		}
	
	mysqli_close($connexion);
?>

