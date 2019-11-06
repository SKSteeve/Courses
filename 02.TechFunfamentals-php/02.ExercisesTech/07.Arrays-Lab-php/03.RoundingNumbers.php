<?php

$str = readline();
$dubali = array_map('floatval', explode(' ' , $str));
$array = array_map('round' , explode(' ' , $str));

for($i = 0; $i < count($array); $i++)
{
    echo number_format($dubali[$i] , 2 , '.' , '') . " => " . $array[$i] . PHP_EOL;
}



