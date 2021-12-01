<?php




if(isset($_SESSION['nom'])){
            
           include 'navbaradherent.php';

           
         }else{
             include 'navbar.php';

         }session_write_close();
        
         

?>