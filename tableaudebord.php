<?php

$page = 'tableaudebord';
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
    
    
?>



    <main>
        <div class="containerText">
        

            <div class="head">
            
                <H2 class="h2Accueil">
                    Bienvenue sur le site officiel de la bibliotheque LE FIL ROUGE
                </H2>
                <hr>
                <h3>tableau de bord <h2 class="date"> Date : <?php echo date('d.m.Y') ?> </h2></h3>
            </div>

            <div class="livreEmprunte">
                <a href="perso">Vos données personnelles</a>
                
            
            
                
            </div>

            <div class="livreEmprunte">
                
            
            
                
            </div>
            <div class="coursEmprunt">
                
            
            
                
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