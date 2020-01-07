<?php

$input = readline();
$phoneBook = [];

while($input != "END")
{
    $arr = explode(' ', $input);
    $command = $arr[0];
    $name = $arr[1];

    switch ($command)
    {
        case 'A':
            $number = $arr[2];
            $phoneBook[$name] = $number;
            break;
        case 'S':
            if(key_exists($name, $phoneBook))
            {
                echo "$name -> $phoneBook[$name]" . PHP_EOL;
            }
            else
            {
                echo "Contact $name does not exist." . PHP_EOL;
            }
            break;
    }
    $input = readline();
}