<?php
session_start();
echo "<header> welcome " .
    $_SESSION['name'] . " " . $_SESSION['name'] .
    "</header> <a href='index.php?action=parameter'Paramètre</a>
<a href='index.php?action=logout'>Se déconnecter</a>";
?>


