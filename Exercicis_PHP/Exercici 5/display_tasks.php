<?php
 if ($argc != 1){
     exit(1);
 }

 $file = file( __DIR__ ."/todolist.txt" );
 var_dump($file);

exit;

