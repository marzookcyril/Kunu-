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

 <form action="modif.php"  method="POST" class="form-info">
  <div class="info">
  <div class='reservations'>
   <h1>Vos informations</h1>
<?php

	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$pseudo = $_SESSION['pseudo'];
	$info = "SELECT * FROM KunuInscrit WHERE pseudo='$pseudo';";
	$exec = mysqli_query($connexion, $info);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
    $array[] = $row;
		}
	

	echo "<br/>";
	echo "Votre pseudo : ".$array[0][pseudo]."<br/>";
	
	echo "Votre email : ".$array[0][email]."<br/>";
	
	echo "Votre nom : ".$array[0][nom]."<br/>";
    
	echo "Votre prenom : ".$array[0][prenom]."<br/>";
	
	echo "Votre date de naissance  : ".$array[0][date_naissance]."<br/>";

	echo "Votre pays : ".$array[0][pays]."<br/>";
	
	echo "Votre adresse : ".$array[0][adresse]."<br/>";
	
	echo "Votre code postal : ".$array[0][code_postal]."<br/>";
	
	echo "</div>";
	
	mysqli_close($connexion);

?>   


    <div class="button">
      <button type="button" onclick="location.href = 'FrontHand/kunu2.php';" class="cancelbtn">Retour</button>
      <button type="submit" class="signupbtn">Modifier mes infos</button>
    </div>
	</div>
</form>


<?php

	$host     = "mysql.etude.cergy.eisti.fr";
	$login    = "crocebapti";
	$password = "bWW3rBdJNO";
	$bdd      = "crocebapti";
	
	$connexion = mysqli_connect($host,$login, $password, $bdd);
	
	$pseudo = $_SESSION['pseudo'];
	
	$info = "SELECT * FROM KunuReservation WHERE pseudo='$pseudo';";
	$exec = mysqli_query($connexion, $info);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
    $array[] = $row;
		}
	
	if (sizeof($array) <> 0) {
		echo "<div class='reservations'>";
		echo " <h1> Vos réservations </h1>";
		for ($i=1;$i<= sizeof($array);$i++){
			
			
		
			echo " <h3> Réservation $i  </h3>";
			echo "Titre du sejour : ";
			echo $array[$i-1]['titre']."<br/>";
			echo "Debut : ";
			echo $array[$i-1]['debut']."<br/>";
			echo "Nombre de jours : ";
			echo $array[$i-1]['fin']."<br/>";
			echo "Nombre de personne : ";
			echo $array[$i-1]['nombre']."<br/>";
			echo " Prix : " ;
			echo $array[$i-1]['prix']." euros <br/>" ;
			if ($i <> sizeof($array)){
				echo "<hr class='sejourbarre'>";
			}
	}
	echo "</div>";
		}

	$info = "SELECT * FROM KunuSejour WHERE pseudo='$pseudo';";
	$exec = mysqli_query($connexion, $info);
	$array = array();
	while($row = mysqli_fetch_assoc($exec)){
		$array[] = $row;
	}

	if (sizeof($array) <> 0) {
		echo "<div class='reservations'>";
		echo " <h1> Vos sejours créés </h1>";
		for ($i=1;$i<= sizeof($array);$i++){
			echo " <h3> Sejour $i </h3>";
			echo "Titre du sejour : ";
			echo $array[$i-1]['titre']."<br/>";
			echo "Description : ";
			echo $array[$i-1]['description']."<br/>";
			echo "code postal : ";
			echo $array[$i-1]['code_postal']."<br/>";
			echo "Adresse : ";
			echo $array[$i-1]['adresse']."<br/>";
			echo "Pays : ";
			echo $array[$i-1]['pays']."<br/>";
			echo " Prix par jour, par personne : " ;
			echo $array[$i-1]['prix']." euros <br/>" ;
			if ($i <> sizeof($array)){
				echo "<hr class='sejourbarre'>";
			}
	}
	
		echo "</div>";

	}


?>



<?php include("FrontHand/functions/footer2.php"); ?>

</body>
</html>
