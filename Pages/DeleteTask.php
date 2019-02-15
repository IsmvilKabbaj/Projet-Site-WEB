<?php   // Augmente la quantité de l'arcticle selectionné  
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation de la reference de l'article selectionné
$Taches = $_GET['Taches'];

// Ciblage de l'article et augmentation de sa quantité
$bdd->exec("DELETE from EDT WHERE Taches = '".$Taches."'");

//Retourne vers la page 
header('Location: ./Page EDT.php');

?>

