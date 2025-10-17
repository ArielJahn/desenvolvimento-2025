<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>area</title>
</head>
<body>
   <h1>Área de um quadrado</h1>
   <?php

   function calcularAreaQuadrado($lado){
      $area = $lado * $lado;
      echo "<p>A área do quadrado de lado $lado metros é <b>$area metros quadrados</b></p>";
   }

   echo "<h3>Testess:</h3>";

   $comprimentoLado1 = 3;
   calcularAreaQuadrado($comprimentoLado1);

   $comprimentoLado2 = 8;
   calcularAreaQuadrado($comprimentoLado2);

   $comprimentoLado3 = 2.5;
   calcularAreaQuadrado($comprimentoLado3);
   ?>
</body>
</html>