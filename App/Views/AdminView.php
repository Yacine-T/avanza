<?php
session_start();
echo "welcome " . $_SESSION['name'] . " " . $_SESSION['name'];?> ?>

<a href="index.php?service=user&action=logout">logout</a>