<?php

$arr = array_map('intval', explode(' ' ,readline()));
while(count($arr) > 1)
{
    $newArr = [];
    for ($i = 0; $i < count($arr) - 1; $i++)
    {
        $newArr[$i] = $arr[$i] + $arr[$i+1];
    }
    $arr = $newArr;
}
echo $arr[0];