<?php
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation des données 
$Nom= $_GET['Nom'];
$Taches = $_GET['Taches'];
echo $Nom;
echo $Taches;

//Preparation de la requete 
$requete = $bdd->prepare( "INSERT INTO EDT (Nom, Taches) VALUES(:Nom, :Taches)");
$requete->execute(array(
    'Nom' => $Nom,
    'Taches' => $Taches
));
//Retourne vers la page 
header('Location: ./Page EDT.php');

?>

