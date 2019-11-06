<?php

$n = intval(readline());
$b = intval(readline());

$n = (string)decbin($n);
$sum = 0;
for($i = 0; $i < strlen($n); $i++)
{
    if($n[$i] == $b)
    {
        $sum++;
    }
}
echo $sum;