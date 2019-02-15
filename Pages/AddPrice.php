<?php   // Augmente le prix de l'arcticle selectionné  
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation de la reference de l'article selectionné
$ref = $_GET['Reference']; 

// Ciblage de l'article et augmentation de son prix 
$bdd->exec("UPDATE Stock SET Prix = Prix+1 WHERE Reference = '".$ref."'"); 

//Retourne vers la page 
header('Location: ./Page Stock.php');

?>

