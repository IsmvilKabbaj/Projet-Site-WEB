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
                ORDER BY stock.id ASC LIMIT 0,5"; //Requette 1 SQL
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <img src="../Ressources/E1.png"height="7%" />
        <br><br>
        <tr> 

            <td > <img src="../Ressources/P1.png"height="45%"/> </td>
            <td > <img src="../Ressources/P2.png"height="45%"/> </td>
            <td > <img src="../Ressources/P3.png"height="45%"/> </td>
            <td > <img src="../Ressources/P4.png"height="45%"/> </td>
            <td > <img src="../Ressources/P5.png"height="45%"/> </td>

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
                ORDER BY stock.id ASC LIMIT 5,5";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <tr> 
            <td> <img src="../Ressources/W1.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W2.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W3.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W4.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W5.png"height="45%"/> </td> 
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
                ORDER BY stock.id ASC LIMIT 10,5";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/E2.png"height="7%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/W6.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W7.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W8.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W9.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W10.png"height="45%"/> </td> 
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE3---------------------- -->
        <!-- ------------------------LIGNE4---------------------- -->
        <?php 
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id
                ORDER BY stock.id ASC LIMIT 15,5";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/E3.png"height="8%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/W11.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W12.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W13.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W14.png"height="45%"/> </td> 
            <td> <img src="../Ressources/W15.png"height="45%"/> </td> 
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE4---------------------- -->
        <?php
        include("./BDP.html"); //Bas de page
        ?>
    </body>
</html>
    







