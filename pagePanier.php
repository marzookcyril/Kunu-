<?php
session_start();
		$pseudo = $_SESSION['pseudo'];
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

 <body>

 <?php include("FrontHand/functions/header3.php"); ?>

  <div class="info">
  
   <h1>Votre panier</h1>
<?php

	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$pseudo = $_SESSION['pseudo'];
	$info = "SELECT * FROM KunuPanier WHERE pseudo='$pseudo';";
	$exec = mysqli_query($connexion, $info);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
    $array[] = $row;
		}
	

	$p =0;
	if (sizeof($array) <> 0) {
		echo "<div class='reservations'>";
		echo " <h1> Votre panier </h1>";
		for ($i=1;$i<= sizeof($array);$i++){
			echo " <h3> Article $i  </h3>";
			echo "Nom du produit : ";
			echo $array[$i-1]['nom']."<br/>";
			echo "Prix du produit : ";
			echo $array[$i-1]['prix']." euros <br/>" ;
			$p = $p + $array[$i-1]['prix'];
			if ($i <> sizeof($array)){
				echo "<hr class='sejourbarre'>";
			}
	}
	echo " <h2> Prix total : ".$p. " euros "."</h2>";
	echo "</div>";
		}

		mysqli_close($connexion);

?>   


    <div class="button">
      <button type="button" onclick="location.href = 'bouhtique.php';" class="cancelbtn">Retourner à la boutique</button>
    </div>
	</div>




<?php include("FrontHand/functions/footer2.php"); ?>

</body>
</html>

