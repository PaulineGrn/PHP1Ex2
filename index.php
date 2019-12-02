<?php
//Déclaration des variables
$lastname='Gernigon';
$firstname='Pauline';
//Déclaration de la variable age avec 22 sans côte puisque c'est pas du texte
$age=22;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP1Ex2</title>
  </head>
  <body>
    <!-- Déclaration d'echo pour afficher les différentes variables concernées -->
  <p><?php echo $lastname;?></p>
  <p><?php echo $firstname;?></p>
  <!-- Déclaration du texte "ans" puisque c'est une chaine de caractère, on ne met pas dans la variable -->
  <p><?php echo $age;?> ans</p>
  </body>
</html>
