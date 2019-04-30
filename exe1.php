<?php


    print "Digite um número: \n";
    $n1 = (int) fgets (STDIN);

    print "Digite outro número: \n";
    $n2 = (int) fgets (STDIN);

    print "\n\n";

    print "O maior número digitado foi: ";

    if ($n1>$n2)

        print "$n1 \n\n";

    else

        print "$n2 \n\n";