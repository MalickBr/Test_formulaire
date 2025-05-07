<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription 🖥️</title>
    <link rel="stylesheet" href="./css/mainn.css">
</head>
<body>
    <header>
        <h1>Formulaire d'inscription</h1>
    </header>
<main>

    <section>
        <h2>
            <span aria-hidden="true">✒️</span>&nbsp;
            Informations saisies:
        </h2>

        <ul>

        <?php
            include_once __DIR__ .'/controller/controllerForm.php';
        ?>
        
    </section>
        <fieldset>
            <legend>INSCRIPTION : Remplir les champs</legend>

            <form action="index.php" method="POST"> 
                <label for="login">Login</label>
                <input type="text" id="login" name="login" placeholder="Votre login" aria-required="true" required>

                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" placeholder="Votre Mot de passe" aria-required="true" required>

                <label>
                    <input type="checkbox" name="admin" value="1"> Vous etes admin
                </label>

                <input type="submit" value="Envoyer">
    
        </form>


    </fieldset>

    </main>
    <footer>
      <strong>
        &copy; - MIT - 2024</strong>
    </footer>
     
</body>
</html>
