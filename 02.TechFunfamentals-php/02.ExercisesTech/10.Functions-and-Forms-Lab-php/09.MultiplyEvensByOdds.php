<?php

function multiplied($num)
{
    $num = abs($num);
    $num = (string)$num;
    $sumEven = 0;
    $sumOdd = 0;
    for($i = 0; $i < strlen($num); $i++)
    {
        if($num[$i] % 2 == 0)
        {
            $sumEven += $num[$i];
        }
        else
        {
            $sumOdd += $num[$i];
        }
    }
    echo $sumOdd * $sumEven;
}

multiplied(readline());