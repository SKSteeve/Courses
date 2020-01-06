<?php

$string = readline();

$newArr = [];
for ($i = 0; $i < strlen($string); $i++)
{
    if(!key_exists($string[$i], $newArr))
    {
        $newArr[$string[$i]] = 1;
    }
    else
    {
        $newArr[$string[$i]] += 1;
    }
}

foreach ($newArr as $key => $value)
{
    echo "$key -> $value" . PHP_EOL;
}