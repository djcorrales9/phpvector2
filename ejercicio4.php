<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 4</title>
  </head>
  <body>
<div class="container">
  <h4>los numeros pares del 1 al 10 en orden acendente es:</h4>
  <?php

  foreach(range(0,10 ,2) as $número) {

   echo "<h4>$número <br></h4>";
  }
  ?>
</div>
  </body>
</html>
