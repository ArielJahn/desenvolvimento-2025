<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Compras na Feira</title>
</head>
<body>
   <h1>A Feira do Joãozinho</h1>
   <?php
   function calcularCompraFeira($saldoInicial, $listaDeProdutos){
      $totalGasto = 0;

      echo "<h3>Itens Comprados:</h3>";

      foreach ($listaDeProdutos as $produto) {
         $custoProduto = $produto['preco_kg'] * $produto['qtd_kg'];
         $totalGasto += $custoProduto;
         echo "<p>{$produto['nome']}: R$ {$custoProduto}</p>";
      }

      echo "<h3>O valor total da compra foi: R$ {$totalGasto}</h3>";

      if ($totalGasto > $saldoInicial) {
         $valorFaltante = $totalGasto - $saldoInicial;
         echo "<p style='color: red; font-weight: bold;'>Faltaram R$ {$valorFaltante}.</p>";
      } 
      else if ($totalGasto < $saldoInicial) {
         $troco = $saldoInicial - $totalGasto;
         echo "<p style='color: blue; font-weight: bold;'>Joãozinho ainda pode gastar R$ {$troco}.</p>";
      } 
      else {
         echo "<p style='color: green; font-weight: bold;'>O valor da compra foi exatamente R$ {$saldoInicial}.</p>";
      }

      echo '<br>';
   }

   $dinheiroJoaozinho = 50.00;

   $listaDeCompras = [
      ['nome' => 'Maçã',     'preco_kg' => 7.49, 'qtd_kg' => 2.0],
      ['nome' => 'Melancia', 'preco_kg' => 1.89, 'qtd_kg' => 4.0],
      ['nome' => 'Laranja',  'preco_kg' => 3.99, 'qtd_kg' => 2.5],
      ['nome' => 'Repolho',  'preco_kg' => 2.50, 'qtd_kg' => 1.0],
      ['nome' => 'Cenoura',  'preco_kg' => 4.10, 'qtd_kg' => 1.0],
      ['nome' => 'Batatinha','preco_kg' => 5.20, 'qtd_kg' => 2.5] 
   ];

   calcularCompraFeira($dinheiroJoaozinho, $listaDeCompras);

   $listaDeCompras = [
      ['nome' => 'Maçã',     'preco_kg' => 1.49, 'qtd_kg' => 2.0],
      ['nome' => 'Melancia', 'preco_kg' => 1.89, 'qtd_kg' => 4.0],
      ['nome' => 'Laranja',  'preco_kg' => 1.99, 'qtd_kg' => 2.5],
      ['nome' => 'Repolho',  'preco_kg' => 1.50, 'qtd_kg' => 1.0],
      ['nome' => 'Cenoura',  'preco_kg' => 1.10, 'qtd_kg' => 1.0],
      ['nome' => 'Batatinha','preco_kg' => 1.20, 'qtd_kg' => 2.5] 
   ];

   calcularCompraFeira($dinheiroJoaozinho, $listaDeCompras);

   $listaDeCompras = [
      ['nome' => 'Maçã',     'preco_kg' => 50, 'qtd_kg' => 1.0],
   ];

   calcularCompraFeira($dinheiroJoaozinho, $listaDeCompras);
   ?>
</body>
</html>