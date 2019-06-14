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
	<link rel="stylesheet" href="FrontHand/style2.css"/>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,500" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

 </head>

 <body class="tchat-body">
 <?php include("FrontHand/functions/header3.php"); ?>

 <div class="tchat">
    	<h4 class="select-discuss"> Selectionner une discussion : </h4> 
	<select id="nom" onchange="envoi()" class="selectenvoie"> 
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

    			<div id="discussion" class="discussion" onmouseover="envoi()"> </div>
    


					<form action="refresh" >
						<div class="messagediv">
							<label for="message" class="votremsg"> <b> Votre Message</b></label> 
							<textarea autofocus type="text" placeholder="Entrer un message" id="message" rows = "5" size="75" maxlength="255"required style="resize: none;" class="textarea-msg"></textarea>
							<div class="btnsenddiv">
								<button type="button" onclick="envoi2();refresh()" class="sendbtn">Envoyer</button>
							</div>
						</div>
					</form>
		</div>


</body>
</html>
