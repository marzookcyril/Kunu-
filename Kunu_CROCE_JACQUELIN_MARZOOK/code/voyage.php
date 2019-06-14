<?php
session_start();
$_SESSION['pseudo']="julien";
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta http-equiv="content-language" content="FR"/>
 </head>

 <body>
 
      <button type="button" onclick="location.href = 'FrontHand/kunu2.php';" class="cancelbtn">Retour</button>
	  <button type="button" onclick="location.href = 'creer.php';" class="cancelbtn">Créer un sejour</button>
	      <button type="button" onclick="location.href = 'reserver.php';" class="cancelbtn">Réserver un séjour</button>

 
 
 </body>
</html>
