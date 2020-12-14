<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer une recette | step 2</title>
</head>
<body>
    <header>
            <h1>Composer une recette - Etapes de la préparation</h1>
        <br>
            <a href="index.php">Accueil</a>
        <br>
        <br>
    </header>

    <form action="index.php?action=post&post=recipe&step=five&edit=true" method="post">

        <input type="text" placeholder="Etape" id="firstStep" name="firstStep" required>
        <br>
        <br>
        <img src="Public/Images/plus.png" alt="ajouter une autre étape" style="width: 30px;height:"30px;" >
        <br>
        <br>
        <input type="submit" value="Suivant">
    </form>

    <br>

</body>
</html>
