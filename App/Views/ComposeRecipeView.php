<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rédiger une publication</title>
</head>
<body>
<header><h1>Rédiger un article</h1>
</header>

<form action="" method="post">

    <input type="text" placeholder="Titre de votre article" id="title" name="title" required>
    <br>
    <br>
    <select id="topic" name="topic" placeholder="Choisissez la thématique de votre article" multiple required>
        <option value="science">Science</option>
        <option value="environment">Environnement</option>
        <option value="wellness">Bien-être</option>
        <option value="cook">Cuisine</option>
        <option value="social">Social</option>
        <option value="economy">Economie</option>
        <option value="generalCulture">Culture générale</option>
    </select>
    <br>
    <br>
    <textarea id="content" name="content" placeholder="Saisissez le contenu de votre article" cols="100" rows="20" required>
        </textarea>
    <br>
    <br>
    <input type="file" placeholder="Uploder une image" id="FirstArticlePicture" name="FirstArticlePicture">

    <input type="file" placeholder="Uploder une image" id="SecondArticlePicture" name="SecondArticlePicture">

    <input type="file" placeholder="Uploder une image" id="ThirdArticlePicture" name="ThirdArticlePicture">
    <br>
    <br>
    <input type="submit" value="Envoyer">
</form>
<a href="index.php">Accueil</a>

</body>
</html>
