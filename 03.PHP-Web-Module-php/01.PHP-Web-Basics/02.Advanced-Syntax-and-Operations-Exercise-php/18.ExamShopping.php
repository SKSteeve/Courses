<?php

$input = readline();
$stocks = [];

while($input != "shopping time")
{
    list($command, $item, $quantity) = explode(" ", $input);
    if(!key_exists($item, $stocks))
    {
        $stocks[$item] = $quantity;
    }
    else
    {
        $stocks[$item] += $quantity;
    }

    $input = readline();
}

$input = readline();

while($input != "exam time")
{
    list($command, $item, $quantity) = explode(" ", $input);
    if(!key_exists($item, $stocks))
    {
        echo "$item doesn't exist" . PHP_EOL;
    }
    else
    {
        if($stocks[$item] <= 0)
        {
            echo "$item out of stock" . PHP_EOL;
        }
        else
        {
            $stocks[$item] -= $quantity;
        }
    }

    $input = readline();
}

foreach ($stocks as $product => $quantity)
{
    if($quantity >= 1)
    {
        echo "$product -> $quantity" . PHP_EOL;
    }
}
