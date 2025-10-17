<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>Div 2</title>
</head>

<body>
   <h1>Div 2</h1>

   <?php
   function verificarDivisibilidadePorDois($numero){
      echo "<b>$numero</b>";

      if($numero % 2 == 0){
         echo "<p style='color: green;'>Valor divisível por 2</p>";
      } 
      else {
         echo "<p style='color: red;'>O valor não  é divisível por 2</p>";
      }
   }

   echo "<h1>Testes:</h1>";

   verificarDivisibilidadePorDois(10);
   verificarDivisibilidadePorDois(7);
   verificarDivisibilidadePorDois(0);
   verificarDivisibilidadePorDois(-4);
   ?>
</body>
</html>