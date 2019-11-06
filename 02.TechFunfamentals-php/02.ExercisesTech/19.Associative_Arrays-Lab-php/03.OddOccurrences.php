<?php

$arr = array_map('strtolower', explode(' ', readline()));
$count = count($arr);
$restult = [];

for($i = 0; $i < $count; $i++)
{
    if(key_exists($arr[$i], $restult))
    {
        $restult[$arr[$i]]++;
    }
    else
    {
        $restult[$arr[$i]] = 1;
    }
}

foreach ($restult as $key => $value)
{
    if($value % 2 != 0)
    {
        echo "$key ";
    }
}