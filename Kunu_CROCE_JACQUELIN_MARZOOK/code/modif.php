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

 <body>
 <?php include("FrontHand/functions/header3.php"); ?>
<form action="changer.php" method="POST" class="modifinfo">

  <label for="email"><b>Email</b></label>
    <input type="text" autofocus placeholder="Entrer Email" name="email" ><br/>


    <br/>
      <label for="adresse"><b> Adresse </b></label>
    <input type="text" placeholder="Entrez votre adresse" name="adresse" ><br/>

  <label for="postal"><b> Code postale</b></label>
    <input type="text" name="postal" ><br/>
     
      <label for="pays"><b> Pays</b></label>
    <input type="text"  name="pays" ><br/>

    <label for="mdp"><b>Nouveau mot de passe</b></label>
    <input type="password" placeholder="Entrer Mot de passe" name="mdp" ><br/>



      <button type="submit" class="signupbtn">Valider</button>


</form>

<?php include("FrontHand/functions/footer2.php"); ?>
</body>
</html>

