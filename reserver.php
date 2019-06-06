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
 </head>

 <body>
 
 Selectionner un sejour :
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
  <div class="container">

<label for="titre"><b>Titre </b></label>
    <input type="text" placeholder="Copier le titre" name="titre" required>
   
      <label for="date"><b> Date de depart</b></label>
    <input type="date" placeholder="" name="date" required>
   
   
    <label for="dure"><b>Duree du sejour </b></label>
    <input type="text" autofocus placeholder="Nombre de jours" name="dure" required><br/>

  <label for="nbr"><b> Nombre de personnes</b></label>
    <input type="text" placeholder="" name="nbr" required><br/>


    <br/>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Valider</button>
    </div>
  </div>
</form>

</html>
