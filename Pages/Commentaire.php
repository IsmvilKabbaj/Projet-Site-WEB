<?php
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}

// Recuperation des données 
$Reference = $_GET['Reference'];
$Commentaire = $_GET['Commentaire'];

echo $Commentaire;
echo $Reference;

//Preparation de la requete 
$requete = $bdd->prepare( "INSERT INTO Commentaires (Reference, Commentaire) VALUES(:Reference, :Commentaire)");
$requete->execute(array(
    'Reference' => $Reference,
    'Commentaire' => $Commentaire
));
//Retourne vers la page 
header('Location: ./Page CommandesClient.php');

?>

