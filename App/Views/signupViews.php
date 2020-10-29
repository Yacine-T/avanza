<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
    <body>
            <form action="" method="post">
                <label for="name">Entrez votre nom</label><br>
                <input type="text" placeholder="Entrez votre nom" id="name" name="name">
                    <br>
                <label for="firstname">Entrez votre nom</label><br>
                <input type="text" placeholder="Entrez votre prenom" id="firstname" name="firstname">
                    <br>
                <label for="profilePicture">Uploder une image de profile</label><br>
                <input type="file" placeholder="Uploder une image de profile" id="profilePicture" name="profilePicture">
                    <br>
                <label for="phone">Entrez votre numéro de téléphone</label><br>
                <input type="text" maxlength="10" placeholder="Entrez votre numéro de téléphone" id="phone" name="phone">
                    <br>
                <label for="email">Entrez votre email</label><br>
                <input type="email" placeholder="Entrez votre email" id="email" name="password">
                    <br>
                <label for="password">Entrez votre mot de passe :</label><br>
                <input type="password" placeholder="Entrez votre password" id="password" name="password">
                    <br>
                <input type="submit">
            </form>
            <a href="index.php">Acceuil</a><br>
            <a href="index.php?part=connexion">connexion</a>
    </body>
</html>
