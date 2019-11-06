<?php

function factorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++)
    {
        $factorial = $factorial * $i;
    }
    echo number_format($factorial, 0, '', '');
}

factorial(intval(readline()));