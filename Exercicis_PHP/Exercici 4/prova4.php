<?php
 if ($argc != 2){
     exit(1);
 }
 $frase = $argv[1];

 echo str_word_count($frase, 0);
$array = str_word_count($frase, 1);

exit;

