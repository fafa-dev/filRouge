<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil/accueil.css">
    <script src="js/filRouge.js"></script>
    <title>Site de la bibliotheque le Fil rouge</title>

</head>
<body>

<?php
    require_once 'header.php';
   
    require_once 'nav.php';
    session_write_close();
    
?>



    <main>
        <div class="containerText">
        

            <div class="head">
            
                <H2 class="h2Accueil">
                    Bienvenue sur le site officiel de la bibliotheque LE FIL ROUGE
                </H2>
                <hr>
                <h3>Accueil <h2 class="date"> Date : <?php echo date('d.m.Y') ?> </h2></h3>
            </div>


            <div class="actu">
                
            
                <p>
                    Bonne nouvelle! 
                </p>
                    <br> 
                <p>
                    Votre bibliotheque Le FILROUGE vient d'ouvrir ses portes. 
                </p>
                    
                <p>
                    La bibliotheque vous accueil du lundi au vendredi :
                </p>
                <p>
                    du Lundi au vendredi : de 9h à 12h et 13h à 20h
                </p>
                <p>
                    Le samedi : de 9h à 12h et 13h à 18h
                </p>
                
            </div>

       
        </div>
    </main>
    
    <div>
    <?php
    require_once 'footer.php'
    
    ?>
    </div>
    <?php

?>

</body>
</html>