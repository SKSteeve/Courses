<?php

$number = readline();
modifyAvg($number);

function modifyAvg(string $num)
{
    while (true)
    {
        $sum = 0;
        $avg = 0;
        for ($i = 0; $i < strlen($num); $i++)
        {
            $sum += intval($num[$i]);
        }

        $avg = $sum / strlen($num);

        if($avg > 5)
        {
            echo $num;
            break;
        }
        else
        {
            $num .= 9;
        }
    }
}