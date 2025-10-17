<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>Financiamento da Moto</title>
</head>

<body>
   <h1>Simulador de Financiamento da Moto do Paulinho</h1>

   <?php
   function calcularParcelaJurosSimples($capital, $tempoMeses, $taxaPercentual){
      $taxaDecimal = $taxaPercentual / 100;

      $juros = $capital * $taxaDecimal * $tempoMeses;

      $montante = $capital + $juros;

      $valorParcela = $montante / $tempoMeses;

      echo "<h3>Opção de Financiamento: {$tempoMeses} vezes</h3>";
      echo "<p>Taxa de juros aplicada: {$taxaPercentual}% ao mês.</p>";
      echo "<p>Valor total a ser pago: R$ " . number_format($montante, 2, ',', '.') . "</p>";
      echo "<p><b>Valor da Parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "</b></p>";
      echo "<hr>";
   }


   $valorMotoAVista = 8654.00;

   echo "<h2>Valor da moto à vista: R$ " . number_format($valorMotoAVista, 2, ',', '.') . "</h2>";

   calcularParcelaJurosSimples($valorMotoAVista, 24, 1.5);
   calcularParcelaJurosSimples($valorMotoAVista, 36, 2.0);
   calcularParcelaJurosSimples($valorMotoAVista, 48, 2.5);
   calcularParcelaJurosSimples($valorMotoAVista, 60, 3.0);
   ?>
</body>

</html>