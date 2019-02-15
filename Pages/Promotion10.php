<?php
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation des données 
$Reference = $_GET['Reference'];
$Marque = $_GET['Marque'];
$Prix = $_GET['Prix'];
$Quantite = $_GET['Quantite'];

//Preparation de la requete 
$requete = $bdd->prepare( "INSERT INTO Promotions (Reference, Marque, Prix, Quantite) VALUES(:Reference, :Marque, :Prix, :Quantite)");
$requete->execute(array(
    'Reference' => $Reference,
    'Marque' => $Marque,
    'Prix' => $Prix,
    'Quantite' => $Quantite
));
$bdd->exec("UPDATE Stock SET Prix = Prix*0.9 WHERE Reference = '".$Reference."'"); 
$bdd->exec("UPDATE Promotions SET Prix = Prix*0.9 WHERE Reference = '".$Reference."'"); 


//Retourne vers la page 
header('Location: ./Page PropositionPromotions.php');


?>

