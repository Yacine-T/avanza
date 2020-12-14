<?php
session_start();
echo "<header> welcome " .
    $_SESSION['name'] . " " . $_SESSION['name'] .
    "</header> 
    <a href='index.php?action=post&post=article'>Rédiger un article </a>
    <a href='index.php?action=post&post=recipe&step=one'>Composer une recette </a>
    <a href='index.php?action=parameter'>Paramètre</a>
    <a href='index.php?action=logout'>Déconnexion</a>";
?>


