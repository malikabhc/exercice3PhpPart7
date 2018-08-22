<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice3/7 User</title>
  </head>
  <body>
    <p>
      <?php
        if(!empty($_GET['lastname']) && !empty($_GET['firstname'])){
            //Affichage des informations saisies dans le formulaire si les cases ne sont pas vides (!empty)
            echo $_GET['lastname'] . ' ' . $_GET['firstname'];
        } else {
            echo 'Formulaire invalide';
        }
      ?>
    </p>
  </body>
</html>
