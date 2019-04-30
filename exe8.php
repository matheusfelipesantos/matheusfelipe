<?php



    print "Digite o preço do 1° produto:\n";
    $nu1 = fgets(STDIN);

    print "Digite o preço do 2° produto:\n";
    $nu2 = fgets(STDIN);

    print "Digite o preço do 3° produto:\n";
    $nu3 = fgets(STDIN);

        if($nu1<$nu2 and $nu1<$nu3 ){
            print "Você deve comprar o 1° produto.\n";       
    }
    
        if($nu2<$nu1 and $nu2<$nu3) { 
            print "Você deve comprar o 2° produto.\n";    
    }
    
        if($nu3<$nu2 and $nu3<$nu1) { 
            print "Você deve comprar o 3° produto.\n";    
    }