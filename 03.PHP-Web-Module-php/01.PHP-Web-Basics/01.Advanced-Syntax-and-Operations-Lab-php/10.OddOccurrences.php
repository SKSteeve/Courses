<?php

$arr = explode(' ', strtolower(readline()));

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

$count = 0;
foreach ($newArr as $key => $value)
{
    $count++;
    if($value % 2 != 0)
    {
        echo $key;
        if ($count != count($newArr))
        {
            echo ', ';
        }
    }
}