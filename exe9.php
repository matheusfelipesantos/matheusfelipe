<?php



    print "Digite o 1° número:";
    $nu1 = fgets (STDIN);

    print "Digite o 2° número:";
    $nu2 = fgets (STDIN);

    print "Digite o 3° número:";
    $nu3 = fgets (STDIN);

    if($nu1> $nu2 and $nu2> $nu3) {
        print "$nu1 \n". "$nu2 \n". "$nu3 \n";
}

    if ($nu1> $nu2 and $nu3> $nu2) {
        print "$n1 \n". "$n3 \n". "$n2 \n";
}

    if ($nu2> $nu1 and $nu1> $nu3) {
        print "$nu2 \n". "$nu1 \n". "$nu3 \n";
}

    if ($nu2> $nu3 and $nu3> $nu1) {
        print "$nu2 \n". "$nu3 \n". "$nu1 \n";
}

    if ($nu3> $nu1 and $nu1> $nu2) {
        print "$nu3 \n". "$nu1 \n". "$nu2 \n";
}

    if ($nu3> $nu2 and $nu2> $nu1) {
        print "$nu3 \n". "$nu2 \n". "$nu1 \n";
}