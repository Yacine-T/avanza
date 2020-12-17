<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rédiger un article | Recapitulatif</title>
</head>
<body>
    <header>
            <h1>Rédiger un article | Recapitulatif</h1>
        <br>
            <a href='index.php?action=post&post=article'>Rédiger un article </a>
            <a href='index.php?action=post&post=article'>Composer une recette </a>
            <a href='index.php?action=parameter'>Paramètre</a>
            <a href='index.php?action=logout'>Déconnexion</a>
        <br>
        <br>
    </header>

    <form action="index.php?action=post&post=article&step=edit" method="post">

        <?=  "Auteur : " . $_SESSION['article']['author'] . " le " . date("d/m/y") . " <br>" .
        "Titre : " . $_SESSION['article']['title'] . "<br>" .
        "Catégories : " . $_SESSION['article']['topics'] . " <br> 
        Contenu : " . $_SESSION['article']['content'] . "<br>" ?>
        <?=" image : "?>  <img src="<?= $_SESSION['article']['image']; ?>"> <br>
        <input type="submit" value="Valider">
    </form>

</body>
</html>
