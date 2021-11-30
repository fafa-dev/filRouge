<?php

$page = 'nav'
?>


<div class=" containerNav ">
    <nav class="nav">
        <nav>
            <ul class="listenav">
                <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo "active";}?>"> <a href="index.php">Accueil</a></li>
                <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'nouscontacter.php'){echo "active";}?>"> <a href="nouscontacter.php">Nous contacter</a></li>
                <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'recherche.php'){echo "active";}?>"><a href="recherche.php">Recherche</a></li>
            </ul>
        </nav>
    </nav>
</div> 