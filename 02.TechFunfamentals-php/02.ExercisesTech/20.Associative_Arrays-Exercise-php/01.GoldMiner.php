<?php

$typeGolds = [];
while(true)
{
    $input = readline();
    if($input == "stop")
    {
        break;
    }
    $gold = $input;
    $karats = readline();
    if(!key_exists($gold, $typeGolds))
    {
        $typeGolds[$gold] = $karats;
    }
    else
    {
        $typeGolds[$gold] += $karats;
    }
}
foreach ($typeGolds as $key => $karat)
{
    echo "$key -> $karat" . "K". PHP_EOL;
}