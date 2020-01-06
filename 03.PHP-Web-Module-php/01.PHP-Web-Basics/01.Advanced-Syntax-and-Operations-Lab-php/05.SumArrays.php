<?php

$arr1 = array_map('intval', explode(' ', readline()));
$arr2 = array_map('intval', explode(' ', readline()));

$len1 = count($arr1);
$len2 = count($arr2);

if($len1 > $len2)
{
    for ($a = 0; $a < count($arr1); $a++)
    {
        $arr2[] = $arr2[$a];
        if (count($arr2) == count($arr1))
        {
            break;
        }
    }
}
else if($len1 < $len2)
{
    for ($a = 0; $a < count($arr2); $a++)
    {
        $arr1[] = $arr1[$a];
        if (count($arr1) == count($arr2))
        {
            break;
        }
    }
}


for ($i = 0; $i < count($arr1); $i++)
{
    echo $arr1[$i] + $arr2[$i] . ' ';
}

