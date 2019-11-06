<?php

$arr1 = array_map('intval', explode(' ', readline()));
$arr2 = array_map('intval', explode(' ', readline()));
$arr3 = [];
if(count($arr1) >= count($arr2))
{
   $bestCount = count($arr1);
}
else
{
    $bestCount = count($arr2);
}

for($i = 0; $i < $bestCount; $i++)
{
    if(isset($arr1[$i]))
    {
        $arr3[] = $arr1[$i];
    }
    if(isset($arr2[$i]))
    {
        $arr3[] = $arr2[$i];
    }
}
echo implode(' ', $arr3);