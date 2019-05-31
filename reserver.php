<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta http-equiv="content-language" content="FR"/>
	<script type="text/javascript" src="reserver.js"></script>
 </head>

 <body>
 
 Selectionner un sejour : 
	<select id="titre" onchange="envoi()"> 
	<?php 
		
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	
		$pseudo = $_SESSION["pseudo"];
		$sejour = "SELECT titre FROM KunuSejour;";
		$exec = mysqli_query($connexion, $sejour);
		$array = array();
		while($row = mysqli_fetch_assoc($exec)){
		$array[] = $row;
		}
		echo "<option value =''> Choisissez un sejour </option>";
		for($i=0;$i<=count($array)-1;$i++){
			echo "<option value='".$array[$i][titre]."'>".$array[$i][titre]."</option>";
		}
			mysqli_close($connexion);

	?>
    </select> 
    <br/>
    <div id="description"> </div>
 
 
 
 
 
 
 </body>
</html>
