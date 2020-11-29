<?php

echo "<header> welcome " .
    $_SESSION['name'] . " " . $_SESSION['firstname'] .
    "<br><br><br>
    <a href='index.php?action=logout'>Déconnexion</a>
    <a href='index.php?action=parameter'>Paramètre</a>
    <a href='index.php?action=article'>Rédiger un article </a>
    <a href='index.php?action=parameter'>Composer une recette </a>
</header>";
