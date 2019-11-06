<?php

while(true)
{
    $n = abs(intval(readline()));
    if($n % 2 != 0)
    {
        echo "Please write an even number." . PHP_EOL;
        continue;
    }
    else
    {
        echo "The number is: $n";
        return;
    }
}