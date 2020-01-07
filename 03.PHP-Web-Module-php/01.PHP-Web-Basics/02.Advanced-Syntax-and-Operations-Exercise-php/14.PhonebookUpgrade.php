<?php


$input = readline();
$phoneBook = [];

while ($input != "END")
{
    $arr = explode(' ', $input);
    $command = $arr[0];

    switch ($command)
    {
        case 'A':
            $name = $arr[1];
            $number = $arr[2];
            $phoneBook[$name] = $number;
            break;
        case 'S':
            $name = $arr[1];
            if (key_exists($name, $phoneBook))
            {
                echo "$name -> $phoneBook[$name]" . PHP_EOL;
            }
            else
            {
                echo "Contact $name does not exist." . PHP_EOL;
            }
            break;
        case "ListAll":
            ksort($phoneBook);
            foreach ($phoneBook as $key => $value)
            {
                echo "$key -> $value" . PHP_EOL;
            }
            break;
    }
    $input = readline();
}