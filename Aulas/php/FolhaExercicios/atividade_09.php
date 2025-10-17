<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>juros compostos</title>
</head>

<body>
   <h1>Simulador de Financiamento da Moto do Juquinha</h1>

   <?php
   function calcularParcelaJurosCompostos($capital, $tempoMeses, $taxaPercentual){
      $taxaDecimal = $taxaPercentual / 100;

      $montante = $capital * ((1 + $taxaDecimal) ** $tempoMeses);

      $valorParcela = $montante / $tempoMeses;

      echo "<h3>Opção de Financiamento: {$tempoMeses} vezes</h3>";
      echo "<p>Taxa de juros aplicada: {$taxaPercentual}% ao mês.</p>";
      echo "<p>Valor total a ser pago: R$ " . number_format($montante, 2, ',', '.') . "</p>";
      echo "<p style='font-size: 1.1em;'><b>Valor da Parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "</b></p>";
      echo "<hr>";
   }

   $valorMotoAVista = 8654.00;

   echo "<h2>Valor da moto à vista: R$ " . number_format($valorMotoAVista, 2, ',', '.') . "</h2>";

   calcularParcelaJurosCompostos($valorMotoAVista, 24, 2.0);
   calcularParcelaJurosCompostos($valorMotoAVista, 36, 2.3);
   calcularParcelaJurosCompostos($valorMotoAVista, 48, 2.6);
   calcularParcelaJurosCompostos($valorMotoAVista, 60, 2.9);
   ?>
</body>

</html>