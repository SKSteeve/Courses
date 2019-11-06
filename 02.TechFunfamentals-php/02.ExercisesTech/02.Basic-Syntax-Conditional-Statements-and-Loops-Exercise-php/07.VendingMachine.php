<?php
$sumInserted = 0;
while(true)
{
    $command = readline();
    if($command == "Start")
    {
        break;
    }
    $coinInserted = floatval($command);
    if($coinInserted != 0.1 && $coinInserted != 0.2 && $coinInserted != 0.5 && $coinInserted != 1 && $coinInserted != 2)
    {
        echo "Cannot accept $coinInserted" . PHP_EOL;
        continue;
    }
    $sumInserted += $coinInserted;
}
$price = 0;
$command = readline();
while($command != "End")
{
    if($command == "Nuts")
    {
        $price = 2.0;
    }
    else if($command == "Water")
    {
        $price = 0.7;
    }
    else if($command == "Crisps")
    {
        $price = 1.5;
    }
    else if($command == "Soda")
    {
        $price = 0.8;
    }
    else if($command == "Coke")
    {
        $price = 1.0;
    }
    else
    {
        echo "Invalid product" . PHP_EOL;
        continue;
    }

    $sumInserted = number_format($sumInserted , 2, '.', '');
    $price = number_format($price , 2 , '.' , '');
    $sumInserted = $sumInserted - $price;

    if($sumInserted >= 0)
    {
        echo "Purchased " . strtolower($command) . PHP_EOL;
    }
    else
    {
        $sumInserted += $price;
        echo "Sorry, not enough money" . PHP_EOL;
    }
    $command = readline();
}

echo "Change: " . number_format(abs($sumInserted) , 2, '.', '');
