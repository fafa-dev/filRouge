<?php

$page='search';
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
                <h3>Recherche </h3>
            </div>

            <br><br>
        
            <div class="research">
 
                <h1 id="rechercher">RECHERCHEZ UN LIVRE</h1>
                <br><br>

                <form action="">
                    <input type="text" placeholder="Recherchez votre livre" id="barreRecherche">
                    <br>
                    <br>
                    
                </form>

                <form id="select" action="" method="">
                    <fieldset> 
                        <legend>Criteres de recherche</legend> 
                        <br>
                        <div class="label">
                            <label for="auteur">Auteur<input type="checkbox" class="checkbox"></label>
                        
                        
                            <label for="editeur">Editeur<input type="checkbox" class="checkbox"></label>
                        
                        
                            <label for="tire">Titre<input type="checkbox" class="checkbox"></label>
                       
                            <label for="Theme">Theme<input type="checkbox" class="checkbox"></label>
                      
                            <label for="allSelect">Tout selectionner<input type="checkbox" class="checkbox"></label>
                        </div>
                        <button type="submit" id="validRecherch">LANCER MA RECHERCHE</button>
                    </fieldset>
                    
                </form>
                

            </div>

       
        </div>
        
    </main>
    <br><br>
    
    <div>
    <?php
    require_once 'footer.php'
    
    ?>
    </div>
    <?php
session_write_close();
?>

</body>
</html>