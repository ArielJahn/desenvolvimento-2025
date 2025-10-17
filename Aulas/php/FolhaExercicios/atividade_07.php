<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>financiamento juros</title>
</head>

<body>
   <h1>Cálculo de Juros do Financiamento</h1>

   <?php
   function calcularJurosFinanciamento($valorAVista, $numeroParcelas, $valorParcela){
      $totalPago = $numeroParcelas * $valorParcela;

      $jurosTotais = $totalPago - $valorAVista;

      $jurosFormatado       = number_format($jurosTotais, 2, ',', '.');
      $totalPagoFormatado   = number_format($totalPago, 2, ',', '.');
      $valorAVistaFormatado = number_format($valorAVista, 2, ',', '.');

      echo "<p>Valor do carro à vista: R$ $valorAVistaFormatado</p>";
      echo "<p>Valor total pago no financiamento ($numeroParcelas parcelas): R$ $totalPagoFormatado</p>";
      echo "<br>";
      echo "<h3>O valor gasto só com juros, em comparação ao valor à vista, foi de <b>R$ $jurosFormatado</b>.</h3>";
   }

   calcularJurosFinanciamento(22500.00, 60, 489.65);
   ?>
</body>

</html>