<?php

$aAulas = [
    'Estrutura de dados II',
    'Engenharia de Software II',
    'Adminstração e Sistemas de Informação',
    'Programação Web I',
    'Banco de Dados II'
];


$aProfessores = [
    'Fernando',
    'Julian',
    'Marciel',
    'Cleber',
    'Marco'
];

for ($i = 0; $i < count($aAulas); $i++) {
    echo "{$aAulas[$i]}: {$aProfessores[$i]}";
}