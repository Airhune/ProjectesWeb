<?php
 if ($argc != 2){
     exit(1);
 }
 $tasca = $argv[1];
 $file = __DIR__ ."/todolist.txt";
 $content = file_get_contents($file);
 $content .= $tasca;
 file_put_contents($file, $content);

exit;

