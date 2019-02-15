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
            <img src="../Ressources/Z4.png" height="15%" alt="" />
        </div> 
        <?php 
        }
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id "; //Requette Jointee SQL


        $reponse = $bdd->query($sql);
        //Création du tableau de stock :
        echo '<table table class="TableStyle" border=1>';
        ?>
        <tr> 
            <td> <img src="../Ressources/22.png"height="12%"/> </td> 
            <td> <img src="../Ressources/23.png"height="12%"/> </td> 
            <td> <img src="../Ressources/24.png"height="12%"/> </td> 
            <td> <img src="../Ressources/25.png"height="12%"/> </td> 
            <td> <img src="../Ressources/26.png"height="12%"/> </td> 
            <td> <img src="../Ressources/27.png"height="12%"/> </td>
        </tr>
        <?php
        foreach($reponse as $row )
        {
        ?>
        <tr>
            <td><?php echo $row['Reference'];?> </td>
            <td><?php echo $row['Marque'];?></td>
            <td><?php echo $row['Prix'];echo ',00 €'?></td>
            <td><?php echo $row['Quantite'];?></td>
            <td> 
                <a href="./AddPrice.php?Reference=<?php echo $row['Reference']?>"> <img src="../Ressources/+.png"height="12%"/></a>      <!-- + -->
                <a href="./DecreasePrice.php?Reference=<?php echo $row['Reference']?>"> <img src="../Ressources/-.png"height="12%"/></a> <!-- - -->
            </td>
            <td>
                <a href="./AddQte.php?Reference=<?php echo $row['Reference']?>"> <img src="../Ressources/+.png"height="12%"/></a>         <!-- + -->
                <a href="./DecreaseQte.php?Reference=<?php echo $row['Reference']?>"> <img src="../Ressources/-.png"height="12%"/></a>    <!-- - -->
            </td>
        </tr>
        <?php } ?>
        </table>

        <?php
            include("./BDP.html");// Bas de page
        ?>
    </body>
</html>