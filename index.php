<html>
    <head>
        <title>Ast PHP</title>
    </head>
    <body>
      <?php
      echo "Step 1 : Plus petit entre 10 et 5 <br><br>";
      $a = 2;
      $b = 8;
      echo min ($a,$b); echo "<br><br>";

      echo "Step 2 : Plus petit entre 15, 7 et 70<br><br>";
      echo min(15, 7, 70); echo "<br><br>";

      echo "Step 3 : Nombre aléatoire entre 1 et 100<br><br>";
      echo rand(1, 100); echo "<br><br>";

      echo "Step 4 : Nombre aléatoire entre 5 et 100<br><br>";
      echo rand(5, 100); echo "<br><br>";

      echo "Step 5 : Addition 12 + 30 <br><br>";
      echo (12 + 30)."\n"; echo "<br><br>";

      echo "Step 7 : Nombre aléatoire entre 1 à 100<br><br>";
      $x = rand(1, 100);
      if ($x < 50){
        echo "$x Je vais faire du bon visuel";
      }
      else{
        echo "$x Je suis un pioupiou";
      } echo "<br><br>";

      echo "Step 8 : Afficher 30 fois perruche avec le num<br>";
      $x = 1;
      $a = " petite perruche";
      while($x <= 30){
        echo ($x);
        echo ($a. '<br/>');
        $x++;
      }echo "<br><br>";

      echo"Step 9 : Affiche perruche < 50<br>";
      $x = rand (1,100);
      if ($x < 50){
        echo "$x Petite perruche";
      }
      else {
        echo "grande perruche";
      }echo "<br><br>";

      echo "Step 10 : Faire une fonction qui prend en paramètre x;<br>";
      $x = rand (1,5);
      if ($x == 1){
        echo "AAAA";
      }
      elseif ($x == 2){
        echo "BBBB";
      }
      elseif ($x == 3){
        echo "CCCC";
      }
      elseif ($x == 4){
        echo "DDDD";
      }
      else {
        echo "Je suis une perruche";
      } echo "<br><br>";

      echo "Step 11 : Faire idem que step 10 mais avec Switch Case<br>";
        $x = rand (1,5);
        switch ($x) {
          case 1:
            echo 'AAAA';
            break;
          case 2:
            echo 'BBBB';
            break;
          case 3:
            echo 'CCCC';
            break;
          case 4:
            echo 'DDDD';
            break;
          default:
            echo 'Je suis une perruche';
        }echo "<br><br>";

      echo "Step 12 : x = nbre aléatoire entre 1 et 2 (entier)";
      $x = rand(1, 2);

            if ($x == 1){
              include ('page1.html');
            }
            else{
              include ('page2.html');
            }
      ?>
    </body>
</html>
