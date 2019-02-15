<tr>
        <?php
        foreach($reponse as $row ){
        ?>
            <td><?php echo $row['Prix'];echo',00 €'?></td>       
        <?php } ?>
        </tr>
        <tr>
        <?php
        $reponse = $bdd->query($sql);
        foreach($reponse as $row ){
        ?>        
            <td>
                <a href="./Commande.php?
                NomClient=<?php echo $_SESSION['LogIn']?>
                &Reference=<?php echo $row['Reference']?>
                &Marque=<?php echo $row['Marque']?>
                &Prix= <?php echo $row['Prix']?>"> 
                <img src="../Ressources/BUY.png"height="22.5%"/>
                </a>
            </td>
        <?php } ?>
        </tr>