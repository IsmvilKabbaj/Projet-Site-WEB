<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
            try //Connexion à la BDD
            {$bdd = new PDO('mysql:host=localhost;dbname=ADTT;charset=utf8', 'root', 'root');}
            catch (Exception $e)
            {die('Erreur : ' . $e->getMessage());}
        ?>
        <!--Retour Page d'accueil et Deconnexion-->
        <div class="EndStyle">
            <a href="./Page ChoixAdmin.php"> <img src="../Ressources/14.png"height="10%"/></a> 
            <a href="./Deconnexion.php"> <img src="../Ressources/deconnect.png"height="10%"/></a>
            <?php
                if($_SESSION['Connexion']==true) {
            ?>
                <h4  class="SessionStyle"> <?php echo $_SESSION['LogIn'];?> is Connected </h4> <!--Shows Session Name -->
        </div> 
        <div class="CenterStyle">
        <img src="../Ressources/EDT.png"height="12%"/>
        <a href="./PutTask.php?"> 
                <img src="../Ressources/pen.png"height="12%"/>
                </a>
        </div> 
        <?php 
        }
        $sql = "SELECT Taches FROM EDT"; //Requette SQL
        $reponse = $bdd->query($sql);

        
        //Création du tableau de stock :
        echo '<table table class="TableStyle" border=1>';
        ?>
        <tr> 
            <td> <img src="../Ressources/Name.png"height="16%"/> </td> 
            <td> <img src="../Ressources/Taask.png"height="16.2%"/><img src="../Ressources/Task.png"height="16%"/><img src="../Ressources/Taask.png"height="16.2%"/> </td> 
            <td> <img src="../Ressources/State.png"height="16%"/> </td> 
        </tr>
        <?php
        foreach($reponse as $row )
        {
        ?>
        <tr>
            <td><img src="../Ressources/Rachid.png"height="16%"/></td>
            <td><?php echo $row['Taches'];?> </td>
            <td> 
                <a href="./DeleteTask.php?Taches=<?php echo $row['Taches']?>"> <img src="../Ressources/Donee.png"height="16%"/></a>      <!-- + -->
            </td>

        </tr>
        <?php } ?>
        </table>

        <?php
            include("./BDP.html");// Bas de page
        ?>
    </body>
</html>