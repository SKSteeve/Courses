<?php

$n = intval(readline());


for($i = 0;$i < $n; $i++)
{
    $toReverse[] = floatval(readline());
}
for($i = $n - 1; $i >= 0; $i--)
{
    echo $toReverse[$i] . " ";
}