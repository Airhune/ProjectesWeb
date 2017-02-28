<?php
 if ($argc != 2){
     echo "Afegeix una tasca per eliminar";
     exit(1);
 }
 $tasca_re = $argv[1];
 $file_todo = file_get_contents( __DIR__ ."/todolist.txt" );
 $file_remove = file_get_contents(__DIR__ . "/completed.txt");
 $tasques = explode("-", $file_todo);
 $num_tasques = count($tasques);
 for ($i = 0; $i < $num_tasques; $i++) {
     if ($tasques[$i] === $tasca_re){
        if (empty($file_remove)){
            $file_remove .= $tasques[$i];
        } else {
            $file_remove .= "-" . $tasques[$i];
        }
        file_put_contents(__DIR__ . "/completed.txt", $file_remove);
         unset($tasques[$i]);
     }
 }
 $tasques = implode("-", $tasques);
 file_put_contents(__DIR__ . "/todolist.txt", $tasques);


