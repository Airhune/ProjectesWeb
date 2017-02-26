<?php
 if ($argc != 2){
     exit(1);
 }
 $num = $argv[1];
for ($i = 0; $i <= 10; $i ++){
    $resultat = $num*$i;
    echo "$i x $num = $resultat\n";
}
exit;

