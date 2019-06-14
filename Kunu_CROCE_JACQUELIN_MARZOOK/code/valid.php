<?php
session_start();
$pseudo   = $_SESSION['pseudo'];
$host     = "mysql.etude.cergy.eisti.fr";
$login    = "crocebapti";
$password = "bWW3rBdJNO";
$bdd      = "crocebapti";

$connexion = mysqli_connect($host,$login, $password, $bdd);


$titre    = $_POST['titre'];
$date     = $_POST['date'];
$personne = $_POST['nbr'];
$dure     = $_POST['dure'];

$requete1 = "SELECT prix FROM KunuSejour WHERE titre='$titre';";
$exec = mysqli_query($connexion, $requete1);
$array = array();
while($row = mysqli_fetch_assoc($exec)){
$array[] = $row;
}


$prix2 = $array[0]['prix']*$dure*$personne;


$requete = "INSERT INTO KunuReservation VALUES ('$titre','$date','$dure','$personne','$pseudo','','$prix2');";

$exec1 = mysqli_query($connexion, $requete);




mysqli_close($connexion);

header('location: info.php');


?>


