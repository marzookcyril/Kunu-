<?php
session_start();
$pseudo   = $_SESSION['pseudo'];
$host     = "mysql.etude.cergy.eisti.fr";
$login    = "crocebapti";
$password = "bWW3rBdJNO";
$bdd      = "crocebapti";

$connexion = mysqli_connect($host,$login, $password, $bdd);


$titre       = $_POST['titre'];
$description = $_POST['description'];
$prix        = $_POST['prix'];
$adresse     = $_POST['adresse'];
$postal      = $_POST['postal'];
$pays        = $_POST['pays'];


$requete = "INSERT INTO KunuSejour VALUES ('$titre','$description','$pseudo','$prix','$pays','$postal','$adresse');";

$exec = mysqli_query($connexion, $requete);

echo "$requete";
echo "$pseudo";
echo "$titre";
echo "$description";
echo "$prix";
echo "$adresse";
echo "$postal";
echo "$pays";



mysqli_close($connexion);

header('location: info.php');


?>
