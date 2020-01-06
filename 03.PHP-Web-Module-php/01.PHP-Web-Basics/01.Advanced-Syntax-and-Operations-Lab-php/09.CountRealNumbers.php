<?php

$nums = explode(' ', readline());

$newArr = [];
for ($i = 0; $i < count($nums); $i++)
{
    if(!key_exists($nums[$i], $newArr))
    {
        $newArr[$nums[$i]] = 1;
    }
    else
    {
        $newArr[$nums[$i]] += 1;
    }
}
ksort($newArr);
foreach ($newArr as $key => $value)
{
    echo "$key -> $value" . PHP_EOL;
}