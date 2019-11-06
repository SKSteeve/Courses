<?php

$arr = array_map('intval',explode(' ' , readline()));
$sumEven = 0;
$sumOdd = 0;
for($i = count($arr)-1; $i >= 0; $i--)
{
    if($arr[$i] % 2 == 0)
    {
        $sumEven += $arr[$i];
    }
    else
    {
        $sumOdd += $arr[$i];
    }
}
$diff = $sumEven - $sumOdd;
echo $diff;