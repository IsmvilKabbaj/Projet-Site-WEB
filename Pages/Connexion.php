<?php
session_start();
try
{$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
catch (Exception $e)
{die('Erreur : ' . $e->getMessage());}
$_SESSION;
$username = $_GET["LogIn"]; //Variables
$password = $_GET["Password"];

$sql = "SELECT * FROM Users WHERE LogIn='" .$username. "' AND Password='" .$password. "'"; //Requette SQL
$reponse = $bdd->query($sql);
if($reponse->rowCount() != 0) {
       if($username=="AdttAdmin"){
              $_SESSION['LogIn']=$username;
              $_SESSION['Connexion']=true;
              header('Location: ./Page ChoixAdmin.php');
       }
       else if($username=="ClientUser"){
              $_SESSION['LogIn']=$username;
              $_SESSION['Connexion']=true;
              header('Location: ./Page ChoixClient.php');
       }
} else {
       header('Location: ./Page reconnexion.php');
}

