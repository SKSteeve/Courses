<?php

$arr1 = explode(' ',readline());
$arr2 = explode(' ', readline());
$identical = true;
$indexDiff = -1;
$sum = 0;
for($i = 0; $i < count($arr1); $i++)
{
    if ($arr1[$i] !== $arr2[$i])
    {
        $identical = false;
        $indexDiff = $i;
        break;
    }
    else
    {
        $sum += $arr1[$i];
    }
}
if($identical == true)
{
    echo "Arrays are identical. Sum: " . $sum;
}
else
{
    echo "Arrays are not identical. Found difference at " . $indexDiff . " index.";
}