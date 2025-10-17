<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>Área Triângulo Retângulo</title>
</head>

<body>
   <h1>Triângulo Retângulo</h1>

   <?php
   function calcularAreaTriangulo($base, $altura){
      $area = ($base * $altura) / 2;
      echo "<p>A área do triângulo retângulo com base $base e altura $altura metros é <b>$area metros quadrados</b>.</p>";
   }

   echo "<h3>Testes:</h3>";

   calcularAreaTriangulo(10, 5);
   calcularAreaTriangulo(8, 6);
   calcularAreaTriangulo(7.5, 3);
   ?>
</body>

</html>