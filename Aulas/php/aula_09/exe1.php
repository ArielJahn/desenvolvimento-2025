<?php

$notasAluno = [8.5, 9.0, 6.5, 7.0];
$faltasAluno = [1, 1, 1, 1, 1];
$totalDeAulas = 60;

function calcularMedia($notas){
   if (empty($notas)) {
      return 0.0;
   }
   return array_sum($notas) / count($notas);
}

function verificarAprovacaoPorNota($media){
   return $media > 7.0 ? "Aprovado" : "Reprovado";
}

function calcularFrequencia($faltas, $totalAulas){
   if ($totalAulas <= 0) {
      return 0.0;
   }
   $numeroDePresencas = $totalAulas - count($faltas);
   return ($numeroDePresencas / $totalAulas) * 100;
}

function verificarAprovacaoPorFrequencia($frequencia){
   return $frequencia > 70.0 ? "Aprovado" : "Reprovado";
}

$mediaFinal = calcularMedia($notasAluno);
$frequenciaFinal = calcularFrequencia($faltasAluno, $totalDeAulas);

echo "Média Final: " . number_format($mediaFinal, 2);
echo "<br>";
echo "Status por Nota: " . verificarAprovacaoPorNota($mediaFinal);
echo "<br>";
echo "Frequência: " . number_format($frequenciaFinal, 2) . "%";
echo "<br>";
echo "Status por Frequência: " . verificarAprovacaoPorFrequencia($frequenciaFinal);
