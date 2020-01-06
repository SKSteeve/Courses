<?php

$arr = explode(', ', readline());

$newArr = [];
for ($i = 0; $i < count($arr); $i++)
{
    if(!key_exists($arr[$i], $newArr))
    {
        $newArr[$arr[$i]] = 1;
    }
    else
    {
        $newArr[$arr[$i]] += 1;
    }
}

foreach ($newArr as $key => $value)
{
    if ($value == 1)
    {
        echo $key . " ";
    }
}