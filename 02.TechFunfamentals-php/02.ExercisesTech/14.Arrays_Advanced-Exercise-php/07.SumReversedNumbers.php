<?php

$arr = explode(' ',readline());
$sum = 0;
for($i = 0; $i < count($arr); $i++)
{
    $currStr = strrev($arr[$i]);
    $arr[$i] = intval($currStr);
    $sum += $arr[$i];
}
echo $sum;