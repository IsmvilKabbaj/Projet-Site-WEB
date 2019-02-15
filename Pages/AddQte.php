<?php   // Augmente la quantité de l'arcticle selectionné  
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation de la reference de l'article selectionné
$Reference = $_GET['Reference'];

// Ciblage de l'article et augmentation de sa quantité
$bdd->exec("UPDATE Stock SET Quantite = Quantite+1 WHERE Reference = '".$Reference."'");

//Retourne vers la page 
header('Location: ./Page Stock.php');

?>

