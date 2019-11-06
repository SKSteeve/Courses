<?php

$array = array_map('intval', explode(' ', readline()));
$input = readline();

while($input != "end")
{
    $tokens = explode(' ', $input);
    $command = $tokens[0];

    switch ($command)
    {
        case 'Contains':
            $numToCheck = $tokens[1];
            contains($array, $numToCheck);
            break;
        case 'Print' && $tokens[1] == "even":
            printEven($array);
            break;
        case 'Print' && $tokens[1] == "odd":
            printOdd($array);
            break;
        case 'Get' && $tokens[1] == "sum":
            getSum($array);
            break;
        case 'Filter':
            $condition = $tokens[1];
            $number = $tokens[2];
            echo filter($array, $condition, $number);
            break;
        case "Add":
            $numToAdd = $tokens[1];
            $array[] = $numToAdd;
            break;
        case "Remove":
            $numToRemove = $tokens[1];
            for($i = 0; $i < count($array); $i++)
            {
                if($array[$i] == $numToRemove)
                {
                    array_splice($array, $i, 1);
                }
            }
            break;
        case "RemoveAt":
            $numAtIndexToRemove = $tokens[1];
            array_splice($array, $numAtIndexToRemove, 1);
            break;
        case "Insert":
            $numToInsert = $tokens[1];
            $indexToInsert = $tokens[2];
            array_splice($array, $indexToInsert, 0, $numToInsert);
            break;
    }
    $input = readline();
}
echo implode(' ', $array);


function contains($arr, $numberToCheck)
{
    for($i = 0; $i < count($arr); $i++)
    {
        if($numberToCheck == $arr[$i])
        {
            echo "Yes" . PHP_EOL;
            return;
        }
    }
    if(true)
    {
        echo "No such number" . PHP_EOL;
    }
}
function printEven($arr)
{
    $evenArr = [];
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] % 2 == 0)
        {
            $evenArr[] = $arr[$i];
        }
    }
    echo implode(' ', $evenArr) . PHP_EOL;
}
function printOdd($arr)
{
    $oddArr = [];
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] % 2 != 0)
        {
            $oddArr[] = $arr[$i];
        }
    }
    echo implode(' ', $oddArr) . PHP_EOL;
}
function getSum($arr)
{
    $sum = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        $sum += $arr[$i];
    }
    echo $sum . PHP_EOL;
}
function filter($arr,$condSimbol , $num)
{
    $filtered = [];
    switch ($condSimbol)
    {
        case '<':
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] < $num)
                {
                    $filtered[] = $arr[$i];
                }
            }
            break;
        case '>':
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] > $num)
                {
                    $filtered[] = $arr[$i];
                }
            }
            break;
        case '>=':
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] >= $num)
                {
                    $filtered[] = $arr[$i];
                }
            }
            break;
        case '<=':
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] <= $num)
                {
                    $filtered[] = $arr[$i];
                }
            }
            break;
    }
    return implode(' ', $filtered) . PHP_EOL;
}