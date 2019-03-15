<?php

print "Digite o valor de seu salário atual: ";
$salario = (float) fgets (STDIN);

print "Digite a % do aumento: ";
$porc = (float) fgets (STDIN);

$nova_porc = $porc/100;
$valor_aumento = $salario*$nova_porc;
$novo_salario = $salario+$valor_aumento;

print "Seu salário atual é: $novo_salario e o valor do aumento é:$valor_aumento";