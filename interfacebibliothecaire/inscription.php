<?php

$page = 'inscription';
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
    <script src="https://kit.fontawesome.com/6f4e25e570.js" crossorigin="anonymous"></script>


    <title>Site de la bibliotheque le Fil rouge</title>
  

</head>
<body>

<?php
    require_once '../header.php';
   
    require_once '../nav.php';
    
    
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

            <br><br>
            
            <div class="formConnect">
           
       

           <form id="inscrit" action="inscription.php" method="POST">
                   <fieldset> 

                   <?php
                        if($_SERVER['REQUEST_METHOD']== 'POST'){  //condition pour savoir si on passe par la methode post
                            // session_start();
            
                            $refPdo = new PDO('mysql:host=localhost;dbname=adherent', 'root','');
            
                            
                            $nom= $_POST['nom'];
                            $prenom = $_POST['prenom'];
                            $cate = $_POST['categorie'];
                            $date = $_POST['date'];
                            $datefin = $_POST ['datefin'];
                            $email = $_POST['email'];
                            $adresse = $_POST ['adresse'];
                            $code = substr($nom, 0 , 3).substr($prenom,0 ,3).rand(0, 999);
                            $pass = substr($prenom,0 ,3).substr($nom, 0 , 3).rand(0, 9999);;
            
            
            
                            // $name = "SELECT * FROM user WHERE nom ='$login'";
                            $name = "INSERT INTO  utilisateur  (code_user, nom_user, prenom_user, categorie, date_adhesion, date_fin_adhesion, email_user, adresse_user, password) VALUES ('$code','$nom', '$prenom',  '$cate', '$date', '$datefin','$email','$adresse', '$pass')";
            
            
                            
                            $stat_pers = $refPdo ->query($name);


                            $subject = 'confirmation de votre inscription';
                            $message = "bonjour ".$prenom." ".$nom."\r\n nous vous confirmons votre inscription a la bibliotheque\r\n votre mot de passe provisoire est ".$pass."\r\n merci de vous rendre dans votre espace perso pour le modifier";
                            $sendmail_from ='From: fafa.afpa@gmail.com';

                            mail($email,$subject,$message,$sendmail_from);
                            
                            
                            
                            }
                   
                   ?>
                   
                       <legend>inscription nouvel adherent</legend> 
                       <br>

                       <br>
                  

          

                       <div class="inscrpition">
                           <label for="nom">nom<input type="text" class="checkbox" name="nom"></label>
                       
                       
                           <label for="prenom">prenom<input type="text" class="checkbox" name="prenom"></label>
                           <label for="categorie">categorie
                               <select value="professeur" name ="categorie" class="checkbox">
                                 <option value="professeur">professeur</option>
                                 <option value="etudiant">etudiant</option>
                                </select>
                                </label>
                       
                       
                           <label for="date">date d'adhesion<input type="date" class="checkbox" name="date"></label>
                           <label for="datefin">date de fin d'adhesion<input type="date" class="checkbox" name="datefin"></label>
                       
                       
                           <label for="email">email<input type="email" class="checkbox" name="email"></label>
                           <label for="adresse">adresse<input type="text" class="checkbox" name="adresse"></label>
                       <br>
                       
                       </div>
                       <button type="submit" class="confirmConect">valider l'inscription</button>
                   </fieldset>
               </form>
           <br>
           <br>
          
       
       </div>
             

       
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