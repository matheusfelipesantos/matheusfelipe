<?php



    print "Digite a primeira nota:\n";
    $n1 = (int)fgets(STDIN);

    print "Digite a segunda nota:\n";
    $n2 = (int)fgets(STDIN);

    $me= ($n1+$n2)/2;

    print "A média entre as duas notas é $me.\n\n";
    
        if ($me>7){
            print "Você está aprovado.\n";
    
        }
        
        else
    
        if ($me<7){
            print "Você está reprovado.\n";
        }
    
        else
    
        if ($me=10){
            print "Você foi aprovado com distinção(Parabéns!).\n";
    }