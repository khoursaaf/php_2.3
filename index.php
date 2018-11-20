<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
      Homme ou Femme.
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ol>
      <li>Vous êtes un homme et vous êtes majeur</li>
      <li>Vous êtes un homme et vous êtes mineur</li>
      <li>Vous êtes une femme et vous êtes majeur</li>
      <li>Vous êtes une femme et vous êtes mineur</li>
    </ol>
    <p>Gérer tous les cas.</p>
    <?php
      $age = 22;
      $gender = "homme";
      if ($age >= 18 && $gender = "homme") {
        echo "Vous êtes un homme et vous êtes majeur.";
      } else {
        echo "Vous êtes un homme et vous êtes mineur.";
      }
    ?>
    <p>Deuxième cas.</p>
    <?php
      $age = 16;
      $gender = "femme";
      if ($age >= 18 && $gender = "femme") {
        echo "Vous êtes un femme et vous êtes majeur.";
      } else {
        echo "Vous êtes un femme et vous êtes mineur.";
      }
    ?>
  </body>
</html>
