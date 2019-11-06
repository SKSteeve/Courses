<?php

$arr = array_map('intval', explode(' ', readline()));
$indexToInsertOn = 0;
while(true)
{
    $arrStr[] = readline();
    $lastStrIndex = count($arrStr)-1;

    if($arrStr[$lastStrIndex] == "end")
    {
        break;
    }
    $lastStr = $arrStr[$lastStrIndex];

    $indexToInsertOn = intval($lastStr[0]);
    $numToInsert = intval($lastStr);

    array_splice($arr, $indexToInsertOn, 0, $numToInsert);
}
echo implode(' ', $arr);