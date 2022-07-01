<?php

$a = 1;
$arr = [22, 45, 22, 34, 234, 'sdf', 234, 657, 22, 'ds', 0, 2, 'sks'];
$pos = 0;


$len = count($arr);
for ($i = 0; $i < $len; $i++){
    if (is_int($arr[$i])) {
        $pos=array_search($arr[$i], $arr);
    }
}

$len++;
for ($j = $len - 1; $j > $pos; $j--){
    $arr[$j] = $arr[$j-1];
}
$pos++;
$arr[$pos] = $a;

print_r($arr);

