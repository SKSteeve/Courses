<?php

$participants = explode(', ', readline());
$input = readline();

$pattern = '/(?<name>[A-Za-z]?)(?<sum>\d?)/';

$racers = [];
while($input != "end of race")
{
    preg_match_all($pattern, $input, $matches);
    $nums = array_values(array_filter($matches['sum']));
    $chars = array_values(array_filter($matches['name']));

    $distance = 0;
    for ($i = 0; $i < count($nums); $i++)
    {
        $distance += $nums[$i];
    }

    $name = '';
    for ($i = 0; $i < count($chars); $i++)
    {
        $name .= $chars[$i];
    }

    if(in_array($name, $participants))
    {
        if(array_key_exists($name, $racers))
        {
            $racers[$name] += $distance;
        }
        else
        {
            $racers[$name] = $distance;
        }
    }

    $input = readline();
}

arsort($racers);

$count = 0;
foreach ($racers as $key => $value)
{
    $count++;
    if ($count == 1)
    {
        echo "1st place: " . $key . PHP_EOL;
    }
    elseif ($count == 2)
    {
        echo "2nd place: " . $key . PHP_EOL;
    }
    else
    {
        echo "3rd place: " . $key . PHP_EOL;
        break;
    }
}