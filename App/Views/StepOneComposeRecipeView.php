<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer une recette | step 1</title>
</head>
<body>
    <header>
            <h1>Composer une recette - Information de base</h1>
        <br>
            <a href="index.php">Accueil</a>
        <br>
        <br>
    </header>

    <form action="index.php?action=post&post=recipe&step=two" method="post">

        <input type="text" placeholder="Intitulé de la recette" id="title" name="title" required>
        <br>
        <br>
        <textarea id="description" name="description" placeholder="Quelques lignes sur votre recette" cols="100" rows="10" required>
        </textarea>
        <br>
        <br>
        <input type="file" id="image" name="image" required>
        <br>
        <br>
        <input type="number" id="nbGuest" name="nbGuest" placeholder="nombre d'invités" step="1" style="width: 17%;" required>
        <br>
        <br>
        <input type="number" id="prepTime" name="prepTime" placeholder="Temps de préparation (en minute)" step="1" style="width: 17%;" required>
        <br>
        <br>
        <select id="difficulty" name="difficulty" required>
            <option value="">Difficulté</option>
            <option value="Novice">Novice</option>
            <option value="Confirmé">Confirmé</option>
            <option value="Expert">Expert</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Suivant">
    </form>

    <br>

</body>
</html>
