<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session Admin
        ?>
        <div class="EndStyle">
            <a href="./index.php"><img src="../Ressources/14.png"height="8%"/></a>
        </div>
        <div class="CenterStyle">
            <img src="../Ressources/8.png" height="10%" alt="" />
        </div>
        <br>
        <h4 class="CenterStyle">Veuillez saisir votre LogIn et Password :</h4>
        <div class="MarginStyle"> <!--Identification -->
            <form method="GET" action="./Connexion.php"><!-- Utilisation de la methode GET -->
            <p> <label for="LogIn">  LogIn : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  <input type="text" name="LogIn" id="LogIn" /></p>
            <p> <label for="Password"> Password </label> : <input type="password" name="Password" id="Password" /></p>
            <p><input type="submit" /></p>
            </form>
        </div> 
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>
    