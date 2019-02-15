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
            <a href="./Page ChoixPromotions.php"> <img src="../Ressources/14.png"height="10%"/></a> 
            <a href="./Deconnexion.php"> <img src="../Ressources/deconnect.png"height="10%"/></a>
            <?php
                if($_SESSION['Connexion']==true) {
            ?>
                <h4  class="SessionStyle"> <?php echo $_SESSION['LogIn'];?> is Connected </h4> <!--Session -->
        </div> 
        <div class="CenterStyle">
            <img src="../Ressources/Z2.png" height="15%" alt="" />
        </div> 

        <?php 
        }
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
        FROM Stock 
        INNER JOIN Marques
        ON Stock.id_Marque = Marques.id 
        WHERE Stock.Quantite>=30"; //Requette Jointee SQL, propose tous les articles ou la quantité est > à 10

        $reponse = $bdd->query($sql);
        //Création du tableau de propositions :
        echo '<table table class="TableStyle" border=1>';
        ?>
        <tr> 
            <td> <img src="../Ressources/22.png"height="12%"/> </td> 
            <td> <img src="../Ressources/23.png"height="12%"/> </td> 
            <td> <img src="../Ressources/24.png"height="12%"/> </td> 
            <td> <img src="../Ressources/25.png"height="12%"/> </td> 
            <td> <img src="../Ressources/28.png"height="12%"/> </td> 
        </tr>
        <?php
        foreach($reponse as $row ){
        ?>
        <tr>
            <td><?php echo $row['Reference'];?></td>
            <td><?php echo $row['Marque'];?></td>
            <td><?php echo $row['Prix'];echo',00 €'?></td>
            <td><?php echo $row['Quantite'];?></td>
            <td>
                <a href="./Promotion10.php?
                Reference=<?php echo $row['Reference']?>
                &Marque=<?php echo $row['Marque']?>
                &Prix= <?php echo $row['Prix']?>
                &Quantite=<?php echo $row['Quantite']?>"> 
                <img src="../Ressources/29.png"height="12%"/>
                </a>
            </td>
        </tr>
        <?php } ?>
        </table>
        <?php
        include("./BDP.html"); //Bas de page
        ?>
    </body>
</html>
    







