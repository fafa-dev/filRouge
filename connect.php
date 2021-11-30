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
    
    ?> 
        
    <main>
        <div class="containerText">

            <div class="head">
            
                <H2 class="h2Accueil">
                   ESPACE ADHERENT
                </H2>
                <hr>
                <h3>VEUILLEZ VOUS IDENTIFIEZ <h2 class="date"> Date : <?php echo date('d.m.Y') ?> </h2></h3>
            </div>
                <br><br>



            <div class="formConnect">
           
       

                <form id="select" action="verif.php" method="POST">
                        <fieldset> 
                            <legend>veuillez vous identifier</legend> 
                            <br>

                            <br>
                       

               
     
                            <div class="label">
                                <label for="login">Numero d'adherent<input type="text" class="checkbox" name="login"></label>
                            
                            
                                <label for="mdp">Mot de passe<input type="password" class="checkbox" name="mdp"></label>
                            
                            <br>
                            
                            </div>
                            <button type="submit" class="confirmConect">se connecter</button>
                        </fieldset>
                    </form>
                <br>
                <br>
               
            
            </div>

        </div>
    </main>
    <div>
    <?php
    require_once 'footer.php'
    
    ?>
    </div>


</body>
</body>
</html>