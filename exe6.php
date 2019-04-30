<?php



    print "Digite um número:\n";
    $nu1 = fgets(STDIN);

    print "Digite outro número:\n";
    $nu2 = fgets(STDIN);

    print "Digite outro número:\n";
    $nu3 = fgets(STDIN);

        if($nu1>$nu2 and $nu1>$nu3 ){
            print "O 1° número é maior que os outros.";       
        }
    
        if($nu2>$nu1 and $nu2>$nu3) { 
            print "O 2° número é maior que os outros.";    
    
        }
    
        if($nu3>$nu2 and $nu3>$nu1) { 
            print "O 3° número é maior que os outros.";    
        }