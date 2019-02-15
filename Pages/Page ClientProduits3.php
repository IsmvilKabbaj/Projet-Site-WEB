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
            <a href="./Page ChoixClient.php"> <img src="../Ressources/14.png"height="10%"/></a> 
            <a href="./Deconnexion.php"> <img src="../Ressources/deconnect.png"height="10%"/></a>
            <?php
                if($_SESSION['Connexion']==true) {
            ?>
                <h4  class="SessionStyle"> <?php echo $_SESSION['LogIn'];?> is Connected </h4> <!--Session -->
        </div> 
                <?php } ?>
        <!-- ------------------------LIGNE1---------------------- -->
        <?php 
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id
                ORDER BY stock.id ASC LIMIT 31,5"; //Requette 1 SQL
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <img src="../Ressources/D5.png"height="7%" />
        <br><br>
        <tr> 
            <td> <img src="../Ressources/W16.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W17.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W18.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W19.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W20.png"height="45%"/> </td> 
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE1---------------------- -->
        <!-- ------------------------LIGNE2---------------------- -->
        <?php 
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id
                ORDER BY stock.id ASC LIMIT 36,5";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/D0.png"height="7%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/W21.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W22.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W23.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W24.png"height="45%"/> </td>
            <td> <img src="../Ressources/W25.png"height="45%"/> </td>   
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE2---------------------- -->
        <!-- ------------------------LIGNE3---------------------- -->
        <?php 
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id
                ORDER BY stock.id ASC LIMIT 41,5";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/T3.png"height="7%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/W26.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W27.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W28.png"height="45%"/> </td>
            <td> <img src="../Ressources/W29.png"height="45%"/> </td>
            <td> <img src="../Ressources/W30.png"height="45%"/> </td>  
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE3---------------------- -->
        <?php
        include("./BDP.html"); //Bas de page
        ?>
    </body>
</html>
    







