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
                <?php } 
                        $sql2 = "SELECT * FROM Commentaires";
                        $reponse2 = $bdd->query($sql2);
                ?>
        <!-- ------------------------LIGNE1---------------------- -->
        <?php 
        $sql = "SELECT Stock.Reference, Marques.Marque, Stock.Prix, Stock.Quantite
                FROM Stock
                INNER JOIN Marques
                ON Stock.id_Marque = Marques.id
                ORDER BY stock.id ASC LIMIT 31,4"; //Requette 1 SQL
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <img src="../Ressources/D3.png"height="8%" />
        <br><br>
        <tr> 
            <td> <img src="../Ressources/F5.png"height="45%"/> </td> 
            <td> <img src="../Ressources/F6.png"height="45%"/> </td> 
            <td> <img src="../Ressources/F7.png"height="45%"/> </td> 
            <td> <img src="../Ressources/F8.png"height="45%"/> </td> 
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
                ORDER BY stock.id ASC LIMIT 41,4";
        $reponse = $bdd->query($sql);

        //Création du tableau de propositions :
        echo '<table table class="TransparentTableStyle" border=1>';
        ?>
        <br><br><img src="../Ressources/D2.png"height="8%" /><br><br>
        <tr> 
            <td> <img src="../Ressources/F9.png"height="45%"/> </td> 
            <td> <img src="../Ressources/F10.png"height="45%"/> </td> 
            <td> <img src="../Ressources/F11.png"height="45%"/> </td> 
            <td class="popup" onclick="myFunction()"> <img src="../Ressources/F12.png"height="45%"/> <span class="popuptext" id="myPopup">Hey</span></td>
        </tr>
        <?php
        include("./AffichagePrix.php"); //Bas de page
        ?>
        </table>
        <!-- ------------------------LIGNE2---------------------- -->
        <?php
        include("./BDP.html"); //Bas de page
        ?>
    </body>
</html>
    







