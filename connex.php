<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="connex.css">
</head>
<body>
    <div class="connexion2">
        <span style="color:white;">Connexion</span><br/><br/>
        <?php
        if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
        ?>
        <form action="index.php" method="post" class="formulaire">
            <fieldset>
                <legend class="io">Authentification</legend>
                <div class="log">
                    <input class="ip" id="pseudo" type="text" name="pseudo" size="15" required>
                    <label for="pseudo">Pseudo</label>
                </div>
                <br>
                <div class="log">
                    <input class="ip" id="password" type="password" name="mdp" size="15" required>
                    <input type="checkbox" onclick="password.type = this.checked ? 'text' : 'password'">
                    <label for="password">Mot de passe</label>
                </div>
                <br><br>
                <input class="btn_inscr" type="submit" value="Se connecter"
                    onclick="password.classList.add('shake'); pseudo.classList.add('shake');
                    setTimeout(() =>{
                        password.classList.remove('shake')
                        pseudo.classList.remove('shake')
                    }, 1000);">
                <br>
                <button class="btn_inscr" type="button" onclick="window.location.href='inscription.php'">S'inscrire</button>
            </fieldset>
        </form>
        <?php
        } else {
            echo '<h2>Vous êtes déjà connecté</h2>';
        }
        ?>
    </div>
</body>
</html>