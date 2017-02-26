<?php
 if ($argc != 4){
     exit(1);
 }
 $num = $argv[1];
 $num1 = $argv[2];
 $operacio = $argv[3];
$validoperation = ['suma', 'resta', 'divideix', 'multiplica'];

if (in_array($operacio, $validoperation)){
    echo $operacio($num, $num1) . "\n";
    exit;
}
echo "invalid opertation";
exit(1);

function suma($num, $num1){
    return $num+$num1;
}

function resta($num, $num1){
    return $num - $num1;
}

function divideix($num, $num1){
    if ($num1 == 0){
        echo "no es pot fer";
    }else {
        return $num / $num1;
    }
}

function multiplica($num, $num1){
    return $num*$num1;
}

