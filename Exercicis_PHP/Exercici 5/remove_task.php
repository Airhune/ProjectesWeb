<?php
 if ($argc != 2){
     exit(1);
 }
 $tasca = $argv[1];
 $file = file( __DIR__ ."/todolist.txt" );
 var_dump($file);
 $max = count($file);

 for ($i = 0; $i<=$max; $i++){
     if ($tasca ) {
         echo "hola";
     }
}

exit;

