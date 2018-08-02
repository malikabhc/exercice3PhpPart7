<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice3/7 User</title>
  </head>
  <body>
    <p>
      <?php
        if(isset($_GET['lastname']) && isset($_GET['firstname'])){
            echo $_GET['lastname'] . ' ' . $_GET['firstname'];
        }
      ?>
    </p>
  </body>
</html>
