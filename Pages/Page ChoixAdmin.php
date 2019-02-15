<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
        ?>
        <br><br><br><br>
        <div class="CenterStyle">
            <a href="./Page Stock.php"> <img src="../Ressources/19.png"height="28%" /></a> <!--Renvoie vers la page produits -->
            <a href="./Page ChoixPromotions.php"> <img src="../Ressources/20.png"height="28%" /></a> <!--Renvoie vers la page services -->
            <a href="./Page ChoixCommandes.php"> <img src="../Ressources/21.png"height="28%" /></a> <!--Renvoie vers la page promotions -->
            <a href="./Page EDT.php"> <img src="../Ressources/TAF.png"height="28%" /></a> <!--Renvoie vers la page promotions -->        
        </div>
        
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>
    