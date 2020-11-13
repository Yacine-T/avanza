<?php
session_start();
echo "welcome " . $_SESSION['name'] . " " . $_SESSION['name'];?> ?>

<a href="index.php?action=logout">Se déconnecter</a>
<a href="index.php?action=parameter">Paramètre</a>