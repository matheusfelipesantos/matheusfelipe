<?php



    for ($h=0; $h<8; $h++){
        for($l=-1; $l<$h; $l++){
            print "* ";
        }
            print "\n";
        }

    print "\n";

    for ($h=0; $h<8; $h++){
        for ($l=8; $l>$h; $l--){
            print "* ";
        }
            print "\n";
        }

    print "\n";

    $n=8;
    $m=8;
 
    for ($h=0; $h<$n; $h++){
        for($l=1; $l<$m; $l++){
            print "* ";
        }
            print "\n";
        }