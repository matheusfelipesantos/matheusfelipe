<?php


    print "digite uma letra: \n ";

    $a = fgets (STDIN);

    if ($a == 'A' or $a == 'E' or $a == 'I' or $a == 'O' or $a == 'U') {

        print "\n é uma vogal \n";

    }

    else {

        print "\n é uma consoante \n";

    }