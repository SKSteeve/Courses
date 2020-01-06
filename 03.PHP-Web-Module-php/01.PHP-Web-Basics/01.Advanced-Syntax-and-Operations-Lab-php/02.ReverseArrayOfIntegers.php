<?php

$num = readline();
$arr = [];

for ($i = 0; $i < $num; $i++)
{
    $input = readline();
    array_unshift($arr, $input);
}

echo implode(' ', $arr);