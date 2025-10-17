<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>area retangulo</title>
</head>
<body>
   <h1>Área de um Retângulo</h1>
   <?php

   function calcularAreaRetangulo($ladoA, $ladoB){
      $area = $ladoA * $ladoB;

      $frase = "A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.";

      if ($area > 10) {
         echo "<h1>$frase</h1>";
      } 
      else {
         echo "<h3>$frase</h3>";
      }
   }

   echo "<h3>Exemplos de cálculo:</h3>";

   calcularAreaRetangulo(5, 4);
   calcularAreaRetangulo(3, 2);
   calcularAreaRetangulo(5, 2);
   ?>
</body>

</html>