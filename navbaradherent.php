<?php


?>


<div class="containerNavadherent">
    <nav class="navbar" >
        <nav>
            <ul class="listenavbar">
                <li class="<?php if($page == 'index'){echo "active";}?>"> <a href="index.php">Accueil</a></li>
                <li class="<?php if($page == 'nc'){echo "active";}?>"> <a href="nouscontacter.php">Nous contacter</a></li>
                <li class="<?php if($page == 'search'){echo "active";}?>"><a href="recherche.php">Recherche</a></li>
                <li class="<?php if($page == ''){echo "active";}?>"><a href="nouscontacter.php">votre Panier</a></li>
                <li class="<?php if($page == 'tableaudebord'){echo "active";}?>"><a href="tableaudebord.php">Tableau de bord</a></li>
            </ul>
        </nav>
    </nav>
</div> 