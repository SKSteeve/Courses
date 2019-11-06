<?php

$arr1 = explode(' ' , readline());
$arr2 = explode(' ' , readline());
$arrCommon = [];

for($i = 0; $i < count($arr2); $i++)
{
    for($a = 0; $a < count($arr1); $a++)
    {
        if($arr2[$i] == $arr1[$a])
        {
            $arrCommon[] = $arr2[$i];
        }
    }
}

echo implode(' ', $arrCommon);