<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
    <body>
    <header>
        <h1>Inscription</h1>
    </header>
            <form action="index.php?action=signup" method="post">

                <input type="text" placeholder="Nom" id="name" name="name" required>
                    <br>
                    <br>
                <input type="text" placeholder="Entrez Prenom" id="firstname" name="firstname" required>
                    <br>
                    <br>
                <input type="file" id="profile_picture" name="profile_picture">
                    <br>
                    <br>
                <input type="text" maxlength="10" placeholder="Numéro de téléphone" id="phone" name="phone" required>
                    <br>
                    <br>
                <input type="email" placeholder="Email" id="email" name="email" required>
                    <br>
                    <br>
                <input type="password" placeholder="Mot de passe" id="password" name="password" required>
                    <br>
                    <br>
                <input type="password" placeholder="Confirmation du mot de passe " id=passwordConfirmation" name="passwordConfirmation" required>
                    <br>
                    <br>
                <p>Comment souhaitez-vous régler vos frais d'adhésion ? </p>
                <label for="payment">En ligne</label>
                <input type="radio" id="payment" name="payment" value="online" required>
                <label for="payment">Sur place</label>
                <input type="radio" id=payment" name="payment" value="onsite" required>
                    <br>
                    <br>
                <input type="submit" value="s'inscrire">
            </form>
            <br>
            <a href="index.php">Acceuil</a>
            <a href="index.php?action=connection">connexion</a>
    </body>
</html>
