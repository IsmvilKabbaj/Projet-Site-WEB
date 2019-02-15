<html>
    <body>
        <?php
            include("./HDP.html");// Haut de page
            session_start(); //Demarrage de la session 
        ?>
        <br>
        <h4 class="CenterGreenStyle">Veuillez saisir une tâche :</h4>
        <div class="MarginStyle"> <!--Identification -->
            <form method="GET" action="./Task.php"><!-- Utilisation de la methode GET -->
            <p> <label for="Nom"> Nom : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="text" name="Nom" id="Nom"/></p>            
            <p> <label for="Taches"> Tache : &nbsp;&nbsp;&nbsp;&nbsp;</label>  <input type="text" name="Taches" id="Taches" size="50" style="height:25px;" /></p>
            <p><input type="submit" /></p>
            </form>
        </div> 
    
        <?php
        include("./BDP.html");// Bas de page
        ?>
    </body>
</html>