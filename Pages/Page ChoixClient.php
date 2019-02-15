<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
        ?>
        <div class="EndStyle">
        <a href="./Page CommandesClient.php"> <img src="../Ressources/Panier.png"height="10%"/></a> 
        <a href="./Deconnexion.php"> <img src="../Ressources/deconnect.png"height="10%"/></a>
        </div>
        <br><br><br>
        <div class="CenterStyle">
        <a href="./Page ClientProduits1.php"> <img src="../Ressources/15.png"height="28%" /></a> <!--Renvoie vers la page produits1 -->            
        <a href="./Page ClientProduits2.php"> <img src="../Ressources/T0.png"height="28%" /></a> <!--Renvoie vers la page produits2 -->
        <a href="./Page ClientProduits3.php"> <img src="../Ressources/16.png"height="28%" /></a> <!--Renvoie vers la page produits3 -->
        <a href="./Page ClientProduits4.php"> <img src="../Ressources/17.png"height="28%" /></a> <!--Renvoie vers la page produits4 -->
        </div>
        
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>
    