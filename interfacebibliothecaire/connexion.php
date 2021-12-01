<?php

$page = 'conexxion';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../accueil/accueil.css">
    <script src="js/filRouge.js"></script>
    <title>Site de la bibliotheque le Fil rouge</title>
  

</head>
<body>

<?php
    require_once '../header.php';
   
    require_once '../nav.php';
    
    
?>



    <main>
        <div class="containerText">
        

        <div class="formConnect">
           
       

           <form id="select" action="connect.php" method="POST">
                   <fieldset> 

                   <?php
                   if(isset($_SESSION['erreur'])){
                       echo '<div class="alert alert-danger" role="alert">';
                       echo $_SESSION['erreur'];
                       echo '</div>';

                   }
                   
                   
                   ?>
                       <legend>veuillez vous identifier</legend> 
                       <br>

                       <br>
                  

          

                       <div class="label">
                           <label for="login">Identifiant <input type="text" class="checkbox" name="login"></label>
                       
                       
                           <label for="mdp">Mot de passe<input type="password" class="checkbox" name="mdp"></label>
                       
                       <br>
                       
                       </div>
                       <button type="submit" class="confirmConect">se connecter</button>
                   </fieldset>
               </form>

       
        </div>
    </main>
    
    <div>
    <?php
    require_once '../footer.php'
    
    ?>
    </div>
    <?php

?>

</body>
</html>
