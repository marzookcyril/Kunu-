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

 <body>

    <!-- HEADER -->

    <?php include("FrontHand/functions/header3.php"); ?>


    <div class="section-reserver">  
      <div class="container-reserver">
          <h1>Selectionner un sejour :</h1>
          <select id="titre" onchange="envoi()">
          <?php
          session_start();

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
          

          <form action="valid.php" method="POST">
            <div class="container-2">
              <div class="contenu-voyage">


                      <label for="titre"><b>Titre </b></label>
                      <input type="text" placeholder="Copier le titre" name="titre" required>
                    
                      <label for="date"><b> Date de depart</b></label> <br>
                      <input type="date" placeholder="" name="date" required class="inputdate">
                    
                      <br>
                      <label for="dure"><b>Duree du sejour </b></label>
                      <input type="text" autofocus placeholder="Nombre de jours" name="dure" required><br/>

                      <label for="nbr"><b> Nombre de personnes</b></label>
                      <input type="text" placeholder="" name="nbr" required><br/>

                      <br/>

                      <div class="clearfix">
                      <button type="submit" class="validerbtn">Valider</button>
              
              
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>


        <!--FOOTER-->

        <?php include("FrontHand/functions/footer.php"); ?>
	
</body>
</html>
