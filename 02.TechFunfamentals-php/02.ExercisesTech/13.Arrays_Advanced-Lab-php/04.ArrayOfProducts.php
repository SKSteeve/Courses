<?php

$n = intval(readline());
$arr = [];
for($i = 0; $i < $n; $i++)
{
    $arr[] = readline();
}
sort($arr);

for($i = 0; $i < count($arr); $i++)
{
    echo $i + 1 . "." . $arr[$i] . PHP_EOL;
}