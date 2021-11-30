<?php
                 
                        
                         
                       
                 if($_SERVER['REQUEST_METHOD']== 'POST'){

                    session_start();
                        $refPdo = new PDO('mysql:host=localhost:3306;dbname=essai;charset=UTF8','root','');
                        $login= $_POST['login'];
                        $pass = $_POST['mdp'];
        
                        $name = "SELECT * FROM essaie WHERE nom='$login'";
        
                        $stat_pers =  $refPdo->query($name);
                        
        
                        $pers = $stat_pers->fetch();
                        var_dump($pers);
                        
            
                    }
                 ?>
                 


               

                    
    




