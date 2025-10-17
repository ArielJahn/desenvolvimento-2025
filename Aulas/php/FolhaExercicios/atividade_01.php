<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Soma</title>
</head>
<body>
   <h1>Soma</h1>
   <?php

   function calcularSomaComCondicoes($num1, $num2, $num3){
      $soma = $num1 + $num2 + $num3;

      $cor = 'black';

      if ($num1 > 10) {
         $cor = 'blue';
      }

      if ($num2 < $num3) {
         $cor = 'green';
      }
      
      if ($num3 < $num1 && $num3 < $num2) {
         $cor = 'red';
      }

      echo "<p>A soma de $num1 + $num2 + $num3 é: <font color='$cor'><b>$soma</b></font></p>";
   }

   echo "<b>Teste 1:</b><br>";
   calcularSomaComCondicoes(11, 10, 10);

   echo "<b>Teste 2:</b><br>";
   calcularSomaComCondicoes(5, 10, 15);

   echo "<b>Teste 3:</b><br>";
   calcularSomaComCondicoes(20, 10, 5);

   echo "<b>Teste 4:</b><br>";
   calcularSomaComCondicoes(8, 10, 9);

   ?>
</body>
</html>