<?php



    $npar=0;
    $nimpar=0;
    $contagemvezes=1;

    do{
        print  "Digite um número: ";
        $n  = (float) fgets (STDIN);
    
    if ($n % 2 == 0){
        $npar ++ ;
    }
    
    if ( $n % 2 != 0){
        $nimpar ++;
    }

    $contagemvezes ++ ;
}

    while ($contagemvezes <= 10);

    if ( $nimpar != 1  and  $npar != 1 ){

        print  " Quantidade de dados impares: $nimpar \n Quantidade de números pares: $npar " ;
    }

    elseif ($nimpar == 1  and  $npar != 1 ){

        print  "Quantidade de número impar: $nimpar \n Quantidade de números pares: $npar ";}
    
    elseif ($nimpar =! 1  and  $npar == 1 ) {
    
        print  " Quantidade de números iguais: $nimpar \n Quantidade de número: $npar ";}
    
    elseif ( $nimpar == 1  and  $npar == 1 )  {
    
        print  " Quantidade de número impar: $nimpar \n Quantidade de número: $npar " ;};