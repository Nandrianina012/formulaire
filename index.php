<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Connexion</h1>
        <form action="config.php" method="POST">
            <label>Adresse e-mail</label>
            <input type="email" name="email" placeholder="email" >
            <label>Mot de passe</label>
            <input type="password" name="mdp" placeholder="mot de passe"><br>
            <input type="submit" value="Se connecter" class="btn">
        </form>
    </section>
</body>
</html>