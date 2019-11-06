<?php

$arr = array_map('intval', explode(' ' , readline()));
$number = intval(readline());
$twoNumSum = 0;
$allCorrectSums = [];

for($i = 0; $i < count($arr); $i++)
{
    for($j = $i + 1; $j < count($arr); $j++)
    {
        $twoNumSum = $arr[$i] + $arr[$j];
        if($twoNumSum == $number)
        {
            $allCorrectSums[] = $arr[$i];
            $allCorrectSums[] = $arr[$j];
        }
        $twoNumSum = 0;
    }
}

for($i = 0; $i < count($allCorrectSums); $i+=2)
{
    echo $allCorrectSums[$i] . " " . $allCorrectSums[$i + 1] . PHP_EOL;
}