<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rédiger un article</title>
</head>
<body>
    <header>
            <h1>Rédiger un article</h1>
        <br>
            <a href='index.php?action=post&post=article'>Rédiger un article </a>
            <a href='index.php?action=post&post=recipe'>Composer une recette </a>
            <a href='index.php?action=parameter'>Paramètre</a>
            <a href='index.php?action=logout'>Déconnexion</a>
        <br>
        <br>
    </header>

    <form action="index.php?action=post&post=article&step=recap" method="post">

        <input type="text" placeholder="Titre" id="title" name="title" required>
        <br>
        <br>
        <select id="topic" name="topics[]" placeholder="Thématique" multiple required>
            <option value="Science">Science</option>
            <option value="Environnement">Environnement</option>
            <option value="Bien-être">Bien-être</option>
            <option value="Cuisine">Cuisine</option>
            <option value="Social">Social</option>
            <option value="Economie">Economie</option>
            <option value="Culture générale">Culture générale</option>
            <option value="Autre">Autre</option>
        </select>
        <br>
        <br>
        <textarea id="content" name="content" placeholder="Saisissez le contenu de votre article" cols="100" rows="20" required>
        </textarea>
        <br>
        <br>
        <input type="file" placeholder="Uploder une image" id="image" name="image" required>
        <br>
        <br>
        <input type="submit" value="Suivant">
    </form>
    <br>

</body>
</html>
