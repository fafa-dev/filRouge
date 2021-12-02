<?php



?>



<header>
        

        <?php



if(isset($_SESSION['user'])){
            
            echo  '<form action="index.php" "><button type="submit" id ="connexion"><h3>espace adhérent</h3></button></form>';
            echo '<h1 class="principale">bonjour '.$_SESSION['user'].'</h1>' ;
            echo  '<form action="deconnect.php" "><button type="submit" id ="connexion"><h3>deconnexion</h3></button></form>';

            

           
         }else{
             echo ' <form action="connect.php" >
             <button type="submit" id ="connexion"><h3>se connecter</h3></button>
             </form>';
             echo '<h1 class="principale">Bibliotheque le fil rouge</h1>';
         }session_write_close();
        
        

?>

                    

     
    </header>
