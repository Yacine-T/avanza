<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
    <body>
        <form action="index.php?status=login" method="post">
            <label for="email">Entrez votre email</label><br>
            <input type="email" placeholder="Entrez votre email" id="email" name="email">
                <br><br>
            <label for="password">Entrez votre mot de passe :</label><br>
            <input type="password" placeholder="Entrez votre mot de passe" id="password" name="password">
                <br><br>
            <input type="submit" value="Se connecter">
        </form>
                <br>
        <a href="index.php">Accueil</a>
        <a href="index.php?status=logout&action=join">inscription</a>
    </body>
</html>
