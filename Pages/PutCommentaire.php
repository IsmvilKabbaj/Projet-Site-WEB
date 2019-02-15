<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session 
            $Reference = $_GET['Reference'];
        ?>
        <br>
        <h4 class="CenterStyle">Veuillez saisir un commentaire pour <?php echo $Reference;?> :</h4>
        <div class="MarginStyle"> <!--Identification -->
            <form method="GET" action="./Commentaire.php"><!-- Utilisation de la methode GET -->
            <p> <label for="Reference"> Reference : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="text" value="<?php echo $Reference; ?>" name="Reference" id="Reference"/></p>            
            <p> <label for="Commentaire"> Commentaire : </label>  <input type="text" name="Commentaire" id="Commentaire" size="50" style="height:25px;" /></p>
            <p><input type="submit" /></p>
            </form>
        </div> 
    
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>