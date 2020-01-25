<?php

$number = intval(readline());
$arr = explode(", ", readline());
numOperator($number, $arr);

function numOperator(int $number, array $arr)
{
    for ($i = 0; $i < 5; $i++)
    {
        switch ($arr[$i])
        {
            case "chop":
                $number /= 2;
                break;
            case "dice":
                $number = sqrt($number);
                break;
            case "spice":
                $number += 1;
                break;
            case "bake":
                $number *= 3;
                break;
            case "fillet":
                $number -= ($number * 0.20);
                break;
        }
        echo $number . PHP_EOL;
    }
}