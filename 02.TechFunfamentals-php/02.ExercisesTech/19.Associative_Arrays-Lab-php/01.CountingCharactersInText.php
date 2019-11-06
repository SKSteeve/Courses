<?php

$text = readline();
$chars = [];
for($i = 0; $i < strlen($text); $i++)
{
    if(key_exists($text[$i], $chars))
    {
        $chars[$text[$i]]++;
    }
    else
    {
        $chars[$text[$i]] = 1;
    }
}

foreach ($chars as $key=>$value)
{
    echo $key .  " -> " . $value . PHP_EOL;
}