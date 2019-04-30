<?php



    print "Deseja Far até quanto? ";
    $far= (float) fgets(STDIN);

    print "(O valor *provavelmente* vai ultrapassar o digitado)\n";

sleep (1);
    $f=0;
    $fnovo=1;

    print "$f $fnovo ";

    while ($fmaisnovoainda<$far){
        $fmaisnovoainda=$f+$fnovo;
            print "$fmaisnovoainda ";
            $f= $fnovo;
            $fnovo= $fmaisnovoainda;}