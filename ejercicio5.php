<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 5</title>
  </head>
  <body>
 <div class="container">
   <center>
   <form  method="post">
          <label>Numero 1:</label>
     <input type="text" name="a" value="" required>
     <label>Numero 2:</label>
     <input type="text" name="b" value="" required>
     <label>Numero 3:</label>
     <input type="text" name="c" value=""required>
     <label>Numero 4:</label>
     <input type="text" name="d" value=""required>
     <label>Numero 5:</label>
     <input type="text" name="e" value=""required></center>
     <center>
     <label>Numero 6:</label>
     <input type="text" name="f" value="" required>
     <label>Numero 7:</label>
      <input type="text" name="g" value="" required>
      <label>Numero 8:</label>
      <input type="text" name="h" value="" required>
      <label>Numero 9:</label>
      <input type="text" name="i" value="" required>
      <label>Numero 10:</label>
      <input type="text" name="j" value="" required></center>
     <center><input type="submit" name="" value="Enviar"></center>
   </form>
  <?php
  if ($_POST) {
    $numeros[]=$_POST['a'];
    $numeros[]=$_POST['b'];
    $numeros[]=$_POST['c'];
    $numeros[]=$_POST['d'];
    $numeros[]=$_POST['e'];
    $numeros[]=$_POST['f'];
    $numeros[]=$_POST['g'];
    $numeros[]=$_POST['h'];
    $numeros[]=$_POST['i'];
    $numeros[]=$_POST['j'];

      $suma = ($numeros[0]+$numeros[1] + $numeros[2]+$numeros[3]+$numeros[4]+$numeros[5]+$numeros[6]+$numeros[7]+$numeros[8]+$numeros[9]);
               echo "<h4>La suma de los de los primeros 10 numero es: $suma</h4>";


          $resta = ($numeros[0]-$numeros[1]- $numeros[2]-$numeros[3]-$numeros[4]-$numeros[5]-$numeros[6]-$numeros[7]-$numeros[8]-$numeros[9]);
                    echo "<h4>La resta de los de los primeros 10 numero es: $resta</h4>";



                  $Multiplicacion  = ($numeros[0]*$numeros[1] * $numeros[2]*$numeros[3]*$numeros[4]*$numeros[5]*$numeros[6]*$numeros[7]*$numeros[8]*$numeros[9]);
                             echo "<h4>La mutiplicacion de los de los primeros 10 numero es: $Multiplicacion</h4>";



                            $division = ($numeros[0]/$numeros[1] / $numeros[2]/$numeros[3]/$numeros[4]/$numeros[5]/$numeros[6]/$numeros[7]/$numeros[8]/$numeros[9]);
                                      echo "<h4>La division de los de los primeros 10 numero es: $division</h4>";
  }

              ?>
             </div>
              </body>
            </html>
