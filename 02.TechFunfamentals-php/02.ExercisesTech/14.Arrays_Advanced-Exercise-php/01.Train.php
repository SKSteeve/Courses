<?php

$wagons = array_map('intval', explode(' ', readline()));
$maxCapacity = intval(readline());
$input = readline();
while($input != "end")
{
    $tokens = explode(' ', $input);
    $command = $tokens[0];
    if($command == "Add")
    {
        $wagons[] = $tokens[1];
    }
    else
    {
        $passengers = intval($command);
        for ($i = 0; $i < count($wagons); $i++)
        {
            if($wagons[$i] + $passengers <= $maxCapacity)
            {
                $wagons[$i] = $wagons[$i] + $passengers;
                break;
            }
        }
    }
    $input = readline();
}
echo implode(' ', $wagons);