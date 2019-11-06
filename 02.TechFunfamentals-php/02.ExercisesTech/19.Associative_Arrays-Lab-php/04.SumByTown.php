<?php

$arr = explode(', ', readline());
$count = count($arr);
$results = [];

for($i = 0; $i < $count; $i++)
{
    if($i % 2 == 0 && !key_exists($arr[$i], $results))
    {
        $results[$arr[$i]] = 0;
    }
    else if($i % 2 != 0)
    {
        $results[$arr[$i-1]] += $arr[$i];
    }
}

foreach ($results as $key => $value)
{
    echo "$key => $value" . PHP_EOL;
}