<?php

session_start();

$methode = $_SERVER['REQUEST_METHOD'];
if($methode === 'GET'){

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
<?php

}else{
        $dsn ='mysql:host=localhost;dbname=connexionBU;charset=utf8';
        $userName = 'root';
        $password = '';

        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
        $psw = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);

        $refPdo = new PDO('mysql:host=localhost:3306;dbname=adherent;charset=utf8', 'root', ''); 

        $sql = 'SELECT * FROM adherents WHERE login=:ident'; //mettre les 2 pts suivi dun identifiant 

        $stat_user = $refPdo->prepare($sql); // mettre prepare a la place de query
        $stat_user->bindParam(':ident', $login); //va permettre de relier la valeur au paramettre nomé $login = la variable login
        $stat_user ->execute(); //permet d'executer 


        if ($stat_user->rowCount() == 1) {
            // comparer le $psw avec le mot de passe de la base de données
            $user = $stat_user->fetch();
        
            
            if ($user['password'] === $psw) {
                // si connecter alors mémoriser en session le login et ...
        
                $_SESSION['nom'] = $user['login'];
                
                header('Location: index.php');
            } else {    // mot de passe incorrect
                $_SESSION['erreur'] = 'Mot de passe erroné !';
                header('Location: connect.php');
            }
        } else {    // login non trouvé en base
            $_SESSION['erreur'] = 'Login erroné !';
            header('Location: connect.php');
        }
    
        

}




?>

</body>
</body>
</html>