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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
  <script type="text/javascript" src="map.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="FrontHand/style2.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,500" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

 </head>

 <?php include("FrontHand/functions/header3.php"); ?>

 <body>

 <div class="creervoyage">

 <div class="section-creer">
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

	<button type="submit" class="addpanier">Créer</button>
</div>
	
</div>

<?php include("FrontHand/functions/footer.php"); ?>
  </body>
</html>
