<?php
 if ($argc != 2){
     echo "Has d'afegir una tasca";
     exit(1);
 }
 $tasca = $argv[1];
 $file = file_get_contents(__DIR__ ."/todolist.txt");
 if(empty($file)) {
     $file .= $tasca;
 } else {
     $file .= "-" . $tasca;
 }
 file_put_contents(__DIR__ ."/todolist.txt", $file);

