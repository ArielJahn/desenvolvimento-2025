<?php

function calculaDesconto($valor = 0, $desconto = 0){
   $valorDoDesconto = $valor * ($desconto / 100);
   $valorFinal = $valor - $valorDoDesconto;

   return $valorFinal;
}

$valorOriginal = $_REQUEST['valor'] ?? 0;
$percentualDesconto = $_REQUEST['desconto'] ?? 0;

$resultado = calculaDesconto($valorOriginal, $percentualDesconto);

echo "Valor Recebido: R$ {$valorOriginal} <br>";
echo "Desconto Recebido: {$percentualDesconto}% <br>";
echo "Valor Final: R$ {$resultado}";