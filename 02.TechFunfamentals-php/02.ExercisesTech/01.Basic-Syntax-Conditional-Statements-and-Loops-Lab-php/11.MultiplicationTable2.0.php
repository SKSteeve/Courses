<?php

$n = intval(readline());
$end = intval(readline());
for($i = $end; $i <= 10; $i++)
{
    echo "$n X $i = " . ($n * $i) . PHP_EOL;
}
if($end > 10)
{
    echo "$n X $end = " . ($n * $end) . PHP_EOL;
}