<?php


        print "Digite f ou m para informar seu sexo:\n";
    
        $sexo = fgetc(STDIN);
    
        if($sexo=="m"){
    
            print "O seu sexo é Masculino.\n";       
    
    }
    
    else
    
        if($sexo== "f"){ 
    
            print "O seu sexo é Feminino.\n";    
    
    }

    else
    
    if($sexo!= "f" or "m"){
    
        print "Inválido.\n";
    }
