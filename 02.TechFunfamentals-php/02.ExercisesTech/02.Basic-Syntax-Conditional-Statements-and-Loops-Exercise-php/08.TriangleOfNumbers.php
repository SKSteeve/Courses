<?php
$n = intval(readline());
$counter = 0;
for($i = 1; $i <= $n; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $i . " ";
    }
    echo PHP_EOL;
}