<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            include("./WPopUp.html");
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
                ORDER BY stock.id ASC LIMIT 20,4"; //Requette 1 SQL
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <img src="../Ressources/T1.png"height="7%" />
        <br><br>
        <tr> 
            <td> <img src="../Ressources/W31.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W32.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W33.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W34.png"height="45%"/> </td> 
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
                ORDER BY stock.id ASC LIMIT 24,4";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/T2.png"height="7%" /><br><br>
        <tr> 
            <td class="popup" onclick="myFunction()"> <img src="../Ressources/W35.png"height="45%"/> <span class="popuptext" id="myPopup">Superbe article, 100% pratique et fiable</span></td>            
            <td> <img src="../Ressources/W36.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W37.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W38.png"height="45%"/> </td>  
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
                ORDER BY stock.id ASC LIMIT 28,3";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/T3.png"height="7%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/W39.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W40.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W41.png"height="45%"/> </td> 
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
    







