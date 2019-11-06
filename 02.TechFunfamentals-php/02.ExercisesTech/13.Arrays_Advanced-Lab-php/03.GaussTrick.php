<?php

$arr = array_map('intval', explode(' ', readline()));

for($i = 0; $i < count($arr); $i++)
{
    if($i == count($arr)-1)
    {
        break;
    }
    $arr[$i] = $arr[$i] + $arr[count($arr)-1];
    array_splice($arr, count($arr)-1, 1);
}
echo implode(' ', $arr);