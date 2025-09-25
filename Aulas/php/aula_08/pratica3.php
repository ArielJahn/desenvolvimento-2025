<?php


$salario1 = 1000;

$salario2 = 2000;

$salario1 = $salario2;

$salario2 = $salario2 + 1;

$salario1 = $salario1 + ($salario1 * 0.10);

echo "Valor salário 1: {$salario1} e valor salário 2: {$salario2}";

if($salario1 > $salario2){
    echo "O valor da variável 1 é maior que o valor da variável 2";
}
else if($salario1 < $salario2){
    echo "Os valores são iguais???????";
}