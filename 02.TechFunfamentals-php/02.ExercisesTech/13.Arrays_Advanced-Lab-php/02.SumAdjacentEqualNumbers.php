<?php

$arr = array_map('floatval', explode(' ', readline()));

for($i = 0; $i < count($arr)-1; $i++)
{
    if($arr[$i] == $arr[$i+1])
    {
        $element = $arr[$i] * 2;                           //0,1,2,3,4,5,6
        array_splice($arr, $i, 2, $element); //[6,2,16,6,7] = count = 7 $i = 2
        $i = $i - 2;
    }
}
echo implode(' ', $arr);