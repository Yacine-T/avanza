<?php
session_start();
echo "welcome " . $_SESSION['data']['name'] . " " . $_SESSION['data']['name'];?> ?>

<a href="index.php?service=user&action=logout">logout</a>