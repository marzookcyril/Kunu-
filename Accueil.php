<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta http-equiv="content-language" content="FR"/>
	<script type="text/javascript" src="ajax.js"></script>
 </head>

 <body>

	<script>
		setTimeout(console.log("wallhaha"), 3000);
	</script>
    
    	Selectionner une discussion : 
	<select id="nom" onchange="envoi()"> 
	<?php 
		
	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";

	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	
		$envoi = $_SESSION["pseudo"];
		$inscrit = "SELECT pseudo FROM KunuInscrit WHERE pseudo <>'$envoi';";
		$exec = mysqli_query($connexion, $inscrit);
		$array = array();
		while($row = mysqli_fetch_assoc($exec)){
		$array[] = $row;
		}
		echo "<option value =''> Choisissez un pseudo </option>";
		for($i=0;$i<=count($array)-1;$i++){
			echo "<option value='".$array[$i][pseudo]."'>".$array[$i][pseudo]."</option>";
		}
			mysqli_close($connexion);

	?>
    </select> 
    <br/>
    <div id="discussion"> </div>
    


 <form action="refresh" style="border:1px solid #ccc" >

  <label for="message"> <b> Votre Message</b></label> 
  <textarea type="text" placeholder="Entrer un message (pas de ponctuation ni d'accent)" id="message" rows = "5" size="75" maxlength="255"required></textarea>


     <button type="button" onclick="envoi2();refresh()" class="signupbtn">Yep</button>
</form>
    


</body>
</html>
