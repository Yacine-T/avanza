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
    <header>
        <h1>Connexion</h1>
    </header>
        <form action="index.php?action=login" method="post">
            <label for="email">Email</label><br>
            <input type="email" placeholder="Email" id="email" name="email">
                <br><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" placeholder="Mot de passe" id="password" name="password">
                <br><br>
            <input type="submit" value="Connexion">
        </form>
                <br>
        <a href="index.php">Accueil</a>
        <a href="index.php?action=join">inscription</a>
    </body>
</html>
