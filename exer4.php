<?php

    print "Digite o preço do produto: ";
    $preco = (float) fgets (STDIN);

    print "Digite a % de desconto: ";
    $desconto = (float) fgets (STDIN);

    $novo_desconto = $desconto/100;
    $valor_real_porcentagem = $preco*$novo_desconto;
    $novo_preco = $preco-$valor_real_porcentagem;

    print "O preço do produto reajustado é: $novo_preco, o desconto foi : $valor_real_porcentagem ";