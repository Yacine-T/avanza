<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètre</title>
</head>
<body>
    <h1>Paramètres de <?= $_SESSION['name'] . " " . $_SESSION['firstname']?></h1>
    <br>
    <form action="index.php" method="post">
        <label for="name">Entrez votre nom</label><br>
        <input type="text"  id="name" name="name" value="<?= $_SESSION['name']?>" required>
        <br>
        <label for="firstname">Entrez votre prenom</label><br>
        <input type="text" id="firstname" name="firstname" value="<?= $_SESSION['firstname']?>" required>
        <br>
        <label for="profilePicture">Uploder une image de profile</label><br>
        <input type="file" id="profile_picture" name="profile_picture" value="<?= $_SESSION['profile_picture']?>">
        <br>
        <label for="phone">Entrez votre numéro de téléphone</label><br>
        <input type="text" maxlength="10" id="phone" name="phone" value="<?= $_SESSION['phone']?>" required>
        <br>
        <label for="email">Entrez votre email</label><br>
        <input type="email" id="email" name="email" value="<?= $_SESSION['email']?>" required>
        <br>
        <label for="password">Entrez votre mot de passe :</label><br>
        <input type="password" placeholder="Entrez votre password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Retour">
        <input type="submit" value="Modifier">
    </form>
    <a href="index.php">Acceuil</a>
    <a href="index.php?action=remove">Supprimer</a>
    <a href="index.php?action=logout">Se déconnecter</a>
</body>
</html>