<html>
    <head>
        <title>Ast PHP</title>
    </head>
    <body>
      <?php
      function pgcd($nombre,$nombre2){
         while($nombre>1){
              $reste = $nombre%$nombre2;
              if($reste == 0){
              break;
              }
              $nombre=$nombre2;
              $nombre2=$reste;
          }
      return $nombre2;
      }
      echo pgcd( 24,36 );
      ?>
    </body>
</html>
