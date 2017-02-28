<?php
if ($argc != 2){
    echo "Afegeix una tasca per eliminar";
    exit(1);
}
$tasca_re = $argv[1];
$file_todo = file_get_contents( __DIR__ ."/todolist.txt" );
$tasques = explode("-", $file_todo);
$num_tasques = count($tasques);
for ($i = 0; $i < $num_tasques; $i++) {
    if ($tasques[$i] === $tasca_re){
        unset($tasques[$i]);
    }
}
$tasques = implode("-", $tasques);
file_put_contents(__DIR__ . "/todolist.txt", $tasques);

