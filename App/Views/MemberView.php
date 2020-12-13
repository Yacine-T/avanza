<?php

echo "<header> welcome " .
    $_SESSION['name'] . " " . $_SESSION['firstname'] .
    "<br><br><br>
    <a href='index.php?action=post&post=article'>Rédiger un article </a>
    <a href='index.php?action=post&post=recipe'>Composer une recette </a>
    <a href='index.php?action=parameter'>Paramètre</a>
    <a href='index.php?action=logout'>Déconnexion</a>
</header>";
