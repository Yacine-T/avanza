<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer une recette</title>
</head>
<body>
    <header>
            <h1>Composer une recette - recapitulatif de votre recette</h1>
        <br>
            <a href="index.php">Accueil</a>
        <br>
        <br>
    </header>
    <form action="index.php?action=post&post=recipe&step=six" method="post">
        <?=
            "Auteur : " . $_SESSION['recipe']['author'] . " le " . date("d/m/y") . " <br>" .
            "Intitulé : " . $_SESSION['recipe']['title'] . "<br>" .
            "Personnes : " . $_SESSION['recipe']['nbGuest'] . " temps de préparation : " . $_SESSION['recipe']['prepTime'] .
            " Difficulté : " . $_SESSION['recipe']['difficulty'] . "<br>" .
            "Description : " . $_SESSION['recipe']['description'] ?> <br>
            <?=" image : "?>  <img src="<?= $_SESSION['recipe']['image']; ?>"> <br>
            <input type="submit" value="valider">

    </form>

</body>
</html>
