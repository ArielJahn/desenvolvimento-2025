<?php

$pastas = [
   "bsn" => [
      "3a Fase" => [
         "desenvWeb",
         "bancoDados 1",
         "engSoft 1" 
      ],
      "4a Fase" => [
         "Intro Web",
         "bancoDados 2",
         "engSoft 2"       
      ]
      ],
   "teste2" => [
      "descricao" => [
         "item1",
      ]
   ]
];

function criarArvore($array, $nivel = 0){
   $indentacao = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $nivel);
   $prefixoItem = "--&nbsp;";

   foreach ($array as $chave => $valor) {
      if (is_array($valor)) {
         echo $indentacao . "<strong>" . $chave . "</strong><br>";
         criarArvore($valor, $nivel + 1);
         continue;
      }
      
      echo $indentacao . $prefixoItem . $valor . "<br>";
   }
}

criarArvore($pastas);