<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
        ?>
        <br><br><br><br>
        <div class="CenterStyle">
            <a href="./Page PropositionPromotions.php"> <img src="../Ressources/31.png"height="28%" /></a> <!--Renvoie vers la page produits -->
            <a href="./Page PromotionsEnCours.php"> <img src="../Ressources/30.png"height="28%" /></a> <!--Renvoie vers la page services -->
        </div>
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>
    