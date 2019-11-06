<?php

function signOf($n)
{
    if($n > 0)
    {
        echo "The number $n is positive.";
    }
    else if($n == 0)
    {
        echo "The number $n is zero.";
    }
    else
    {
        echo "The number $n is negative.";
    }
}

$number = readline();
signOf($number);