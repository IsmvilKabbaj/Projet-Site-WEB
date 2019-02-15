<?php
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation des données
$NomClient = $_GET['NomClient'];
$Reference = $_GET['Reference'];
$Marque = $_GET['Marque'];
$Prix = $_GET['Prix'];

$requete = $bdd->prepare("INSERT INTO Commandes (NomClient, Reference, Marque, Prix) VALUES(:NomClient, :Reference, :Marque, :Prix)");
$requete->execute(array(
    'NomClient' => $NomClient,
    'Reference' => $Reference,
    'Marque' => $Marque,
    'Prix' => $Prix
));

$requete = $bdd->prepare("INSERT INTO CommandesA (NomClient, Reference, Marque, Prix) VALUES(:NomClient, :Reference, :Marque, :Prix)");
$requete->execute(array(
    'NomClient' => $NomClient,
    'Reference' => $Reference,
    'Marque' => $Marque,
    'Prix' => $Prix
));
header('Location: ./Page ClientProduits2.php');

?>

