<?php

$gifts = explode(' ', readline());
$input = readline();
while($input != "No Money")
{
    $command = explode(' ', $input);
    if($command[0] == "OutOfStock")
    {
        for($i = 0; $i < count($gifts); $i++)
        {
            if($command[1] == $gifts[$i])
            {
                $gifts[$i] = "None";
            }
        }
    }
    else if($command[0] == "Required" && $command[2] < count($gifts) && $command[2] >= 0)
    {
        $gifts[$command[2]] = $command[1];
    }
    else if($command[0] == "JustInCase")
    {
        $count = count($gifts) - 1;
        $gifts[$count] = $command[1];
    }
    $input = readline();
}

for($i = 0; $i < count($gifts); $i++)
{
    if($gifts[$i] != "None")
    {
        echo $gifts[$i] . ' ';
    }
}