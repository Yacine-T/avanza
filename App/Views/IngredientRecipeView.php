<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composer une recette | step 2</title>
</head>
<body>
    <header>
            <h1>Composer une recette - Ingredients</h1>
        <br>
            <a href="index.php">Accueil</a>
        <br>
        <br>
    </header>

    <form action="index.php?action=post&post=recipe&step=three" method="post">

        <input type="text" placeholder="Etape" id="firstIngredient" name="firstIngredient" required>
        <br>
        <br>
        <input type="number" step="any" placeholder="quantité" id="quantity" name="quantity" required>
        <br>
        <br>
        <select id="measureUnit" name="measureUnit" style="width: 17%;" required>
            <option value="">Unité de mesure</option>
            <option value="">--Liquide--</option>
            <option value="litre">Litre</option>
            <option value="centilitre">Centilitre</option>
            <option value="mililitre">Mililitre</option>
            <option value="">--Solide--</option>
            <option value="kilogram">Kilogramme</option>
            <option value="gram">Gramme</option>
            <option value="other">--Autre--</option>
            <option value="tablespoon">Cuillère à soupe</option>
            <option value="teaspoon">Cuillère à café</option>
            <option value="cup">Tasse</option>
            <option value="cup">Verre (33 cl)</option>
            <option value="cup">Carreau(x)</option>
            <option value="cup">Pincé</option>
        </select>
        <br>
        <br>
        <input type="file" id="ingredientImage" name="ingredientImage" required>
        <br>
        <br>
        <img src="Public/Images/plus.png" alt="ajouter une autre étape" style="width: 30px;height:"30px;" >
        <br>
        <br>
        <input type="submit" value="Suivant">
    </form>

    <br>

</body>
</html>
