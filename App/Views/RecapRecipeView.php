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
            " Pour : " . $_SESSION['recipe']['nbGuest'] . " personnes" . "<br>" .
            " temps de préparation : " . $_SESSION['recipe']['prepTime'] . " minutes" . "<br>" .
            "Ingrédients : "  . $_SESSION['recipe']['quantity'] . " " . $_SESSION['recipe']['measureUnit'] . " de " . $_SESSION['recipe']['ingredient'] . " <br>" .
            "illustration des ingédients :" . $_SESSION['recipe']['ingredientImage'] . "<br>" .
            "Ustensile : "  . $_SESSION['recipe']['quantityUstensils'] . " " . $_SESSION['recipe']['ustensils'] . "<br>" .
            "Illustration des ustensils :" . $_SESSION['recipe']['ustensilImage'] . " <br>" .
            "Difficulté : " . $_SESSION['recipe']['difficulty'] . "<br>" .
            "Description : " . $_SESSION['recipe']['description'] . "<br>" .
            "Etape à suivre : " . $_SESSION['recipe']['steps'] ?> <br>
            <?=" image : "?>  <img src="<?= $_SESSION['recipe']['image']; ?>"> <br>
            <input type="submit" value="valider">

    </form>

</body>
</html>
