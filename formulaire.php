<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
       <title>Formulaire</title>
        <style type="text/css">
           
            span {
                background-color: red;
            }
        </style>
    </head>
    <body>
        <h1>Connexion</h1>
        <form method="post" action="traitement.php">
            <label for="prenom">Votre prénom : </label>
            <input type="text" name="prenom" id="prenom" required ><br />
            <label for="age">Votre âge : </label>
            <input type="number" name="age" id="age" required> ans.<br />
  <?php
                    if (isset($_GET['erreurage'])) {
                        echo '<span>Erreur d age, veuillez saisir un nombre</span>';
                    }
                ?>

            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>

