<?php



    print  "Digite uma base: ";
        $b = (float) fgets(STDIN);

    print  "Digite o expoente: ";
        $e = (float) fgets(STDIN);
        
        $p = ($b ** $e);

    print  "\n O resultado é: $p ";