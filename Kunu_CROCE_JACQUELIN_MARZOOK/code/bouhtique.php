<?php
session_start();

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta http-equiv="content-language" content="FR"/>
<script type="text/javascript" src="panier.js"></script>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="FrontHand/style2.css">
    

    <title>Kunu</title>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,500" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<?php include("FrontHand/functions/header3.php"); ?>

<div class="bouhtique">

<div class="bouhtique-container">

<div class="produit">
<div id="thevert"  name="8" >Thé vert mleh de fouuuu</div>
 <img src="img/the.png" class="imgproduct">
  <br/>
   <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
 	 <br/>
 <button type="button" onclick=envoi("thevert") name="8" class="addpanier">Ajouter au panier</button>
 </div>


 <div class="produit">
  <div id="livre" name="5" > Livre tout nu sans couverture</div>
  <img src="img/livre.jpg" class="imgproduct1">
  <br/>
  <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
  <br/>
  <button type="button" onclick=envoi("livre") name="5" class="addpanier">Ajouter au panier</button>
  </div>


  <div class="produit">
  <div id="creme" name="12" > Creme solaire zone intime</div>
  <img src="img/creme.jpg" class="imgproduct2">
   <br/>
   <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
 	<br/>
  <button type="button" onclick=envoi("creme") name="12" class="addpanier">Ajouter au panier</button>
  </div>
</div>
</div>

    <br/>
    <br/>
    <div class="btnpanier">
        <button type="button" onclick="location.href = 'pagePanier.php';" class="cancelbtn">Voir mon panier</button>
    </div>

   <?php include("FrontHand/functions/footer.php"); ?>

</body>
</html>
