<?php


$arr = explode(" ", trim(fgets(STDIN)));
$n = trim(fgets(STDIN));

$arrResult = [];

for ($i = 0; $i < $n; $i++)
{
    for ($j = count($arr) - 1; $j >= 0; $j--)
    {
        if ($j == 0)
        {
            $arr[$j + 1] = $arr[$j];
            $arr[0] = $arr[count($arr) - 1];
            array_pop($arr);
            break;
        }
        $arr[$j + 1] = $arr[$j];
    }
    for ($j = 0; $j < count($arr); $j++)
    {
        $arrResult[$j] += $arr[$j];
    }
}

foreach ($arrResult as $item)
{
    echo "$item ";
}