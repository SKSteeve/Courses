<?php

$array = array_map('intval', explode(' ', readline()));

while(true)
{
    $tokens = explode(' ', readline());
    $command = $tokens[0];

    if($command == "Delete")
    {
        $element = intval($tokens[1]);
        for($i = 0; $i < count($array); $i++)
        {
            if($array[$i] == $element)
            {
                array_splice($array, $i, 1);
                $i--;
            }
        }
    }
    else if($command == "Insert")
    {
        $element = intval($tokens[1]);
        $position = $tokens[2];
        array_splice($array, $position, 0, $element);
    }
    else if($command == "Odd")
    {
        $oddArray = [];
        for($i = 0; $i < count($array); $i++)
        {
            if($array[$i] % 2 != 0)
            {
                $oddArray[] = $array[$i];
            }
        }
        echo implode(' ', $oddArray);
        return;
    }
    else
    {
        $evenArray = [];
        for($i = 0; $i < count($array); $i++)
        {
            if($array[$i] % 2 == 0)
            {
                $evenArray[] = $array[$i];
            }
        }
        echo implode(' ', $evenArray);
        return;
    }
}