<?php

    print "\nQuantos dias o carro ficou alugado?\n";
    $dias = (int) fgets (STDIN);

    print "Quantos quilômetros foram rodados com o carro?\n";
    $km_percorridos = (float) fgets (STDIN);
    
    $custo_dias = 60 * $dias;
    $custo_km = 0.15 * $km_percorridos;
    $resultado = $custo_dias + $custo_km;

    print "\nO preço final ficou : R$$resultado\n";