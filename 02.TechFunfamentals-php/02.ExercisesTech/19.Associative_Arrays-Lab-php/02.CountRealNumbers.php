<?php

$arr = explode(' ', readline());
$result = [];
$count = count($arr);

for($i = 0; $i < $count; $i++)
{
    if(!key_exists($arr[$i], $result))
    {
        $result[$arr[$i]] = 1;
    }
    else
    {
        $result[$arr[$i]]++;
    }
}
ksort($result);
foreach ($result as $key => $value)
{
    echo $key . " -> " . $value . PHP_EOL;
}