<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
        ?>
        <br><br><br><br>
        <div class="CenterStyle">
            <a href="./Page CommandesEC.php"> <img src="../Ressources/CAP.png"height="28%" /></a> <!--Renvoie vers la page services -->
            <a href="./Page Commandes.php"> <img src="../Ressources/AllC.png"height="28%" /></a> <!--Renvoie vers la page produits -->
        </div>
        
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>
    