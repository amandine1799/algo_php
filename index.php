<html>
    <head>
        <title>Ast PHP</title>
    </head>
    <body>
      Step 1 : Plus petit entre 10 et 5<br>
      <?php echo min(10, 5,);?><br><br>
      Step 2 : Plus petit entre 15, 7 et 70<br>
      <?php echo min(15, 7, 70);?><br><br>
      Step 3 : Nombre aléatoire entre 1 et 100<br>
      <?php echo rand(1, 100);?><br><br>
      Step 4 : Nombre aléatoire entre 5 et 100<br>
      <?php echo rand(5, 100);?><br><br>
      Step 5 : Addition 12 + 30 <br>
      <?php echo (12 + 30)."\n"; ?><br><br>
      Step 6 : PGCD de 24 et 36<br>
      <?php
      function pgcd($nombre,$nombre2){
        while($nombre>1){
          $reste = $nombre%$nombre2;
          if($reste == 0){
            break; // sorti quand resultat trouvé
          }
          $nombre=$nombre2;
          $nombre2=$reste;
        }
      return $nombre2; // retourne le resultat
      }
      echo pgcd( 24,36 ); ?><br><br>
      Step 7 : Nombre aléatoire entre 1 et 100<br>
      <?php $x = rand(1, 100);

      if ($x < 50){
        echo "$x Je vais faire du bon visuel";
      }
      else{
        echo "$x Je suis un pioupiou";
      } ?><br><br>
      Step 8 : Afficher 30 fois perruche avec le num<br>
      <?php
      $x = 1;
      $a = " petite perruche";
      while($x <= 30){
        echo ($x);
        echo ($a. '<br/>');
        $x++;
      }
      ?><br><br>
    </body>
</html>
