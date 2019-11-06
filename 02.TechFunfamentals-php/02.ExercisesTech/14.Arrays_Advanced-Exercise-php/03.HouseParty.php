<?php

$numCommands = intval(readline());

$listOfGuests = [];

for($i = 0; $i < $numCommands; $i++)
{
    $tokens = explode(' ', readline());
    $name = $tokens[0];
    $goingOtNot = $tokens[2];

    if($goingOtNot == "going!")
    {
        if(in_array($name,$listOfGuests))
        {
            echo $name . " is already in the list!". PHP_EOL;
        }
        else
        {
            $listOfGuests[] = $name;
        }
    }
    else
    {
        if(in_array($name,$listOfGuests))
        {
            $index = array_search($name,$listOfGuests);
            array_splice($listOfGuests, $index, 1);
        }
        else
        {
            echo $name . " is not in the list!".PHP_EOL;
        }
    }
}

echo implode(PHP_EOL, $listOfGuests);