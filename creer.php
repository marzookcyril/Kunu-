<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
  <meta http-equiv="content-language" content="FR"/>
 </head>

 <body>
 
	<form action="ajouter.php"  method="POST">
 
    <label for="titre"><b>Titre du séjour</b></label>
    <input type="text" autofocus placeholder="Entrez le titre" name="titre" required><br/>

  <label for="description"><b> Description </b></label 	>
    <input type="text" placeholder="Entrez une description" name="description" required><br/>

  <label for="prix"><b> Prix par nuit</b></label>
    <input type="text" placeholder="Entrez le prix" name="prix" required>
    <br/>
      <label for="adresse"><b> Adresse </b></label>
    <input type="text" placeholder="Entrez l'adresse" name="adresse" required><br/>

  <label for="postal"><b> Code postale</b></label>
    <input type="text" name="postal" required><br/>
     
      <label for="pays"><b> Pays</b></label>
    <input type="text"  name="pays" required><br/>

	<button type="submit">Créer</button>

	
  </body>
</html>
