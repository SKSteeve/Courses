<?php

function sum($num1,$num2)
{
    $sum = $num1 + $num2;
    return $sum;
}
$sum = sum(intval(readline()),intval(readline()));
function subtract($suma,$num3)
{
    $suma = $suma - $num3;
    return $suma;
}
echo subtract($sum,intval(readline()));

