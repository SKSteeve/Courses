<?php

$arr = array_map('intval', explode(' ', readline()));
$count = count($arr);
$match = false;
for($i = 0; $i < $count-1; $i++)
{
    $a = $arr[$i];
    $b = 0;
    for($s = $i+1; $s < $count; $s++)
    {
        $b = $arr[$s];
        $sum = $a + $b;
        for($c = 0; $c < $count; $c++)
        {
            if($sum == $arr[$c])
            {
                echo "$a + $b == $sum" . PHP_EOL;
                $match = true;
            }
        }
    }
}

if(!$match)
{
    echo "No";
}