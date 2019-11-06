<?php

$array = array_map('intval', explode(' ', readline()));

while(true)
{
    $input = readline();
    if($input == "End")
    {
        echo implode(' ', $array);
        return;
    }
    $tokens = explode(' ', $input);
    $mainCommand = $tokens[0];
    switch ($mainCommand)
    {
        case "Add":
            $numToAdd = intval($tokens[1]);
            $array[] = $numToAdd;
            break;
        case "Insert":
            $numToInsert = intval($tokens[1]);
            $indexToInsertOn = intval($tokens[2]);
            if($indexToInsertOn < 0 || $indexToInsertOn >= count($array))
            {
                echo "Invalid index". PHP_EOL;
                break;
            }
            array_splice($array, $indexToInsertOn, 0, $numToInsert);
            break;
        case "Remove":
            $indexToRemoveEle = intval($tokens[1]);
            if($indexToRemoveEle < 0 || $indexToRemoveEle >= count($array))
            {
                echo "Invalid index" . PHP_EOL;
                break;
            }
            array_splice($array, $indexToRemoveEle, 1);
            break;
        case "Shift":
            $leftOrRight = $tokens[1];
            $count = intval($tokens[2]);
            if($leftOrRight == "left")
            {
                for($i = 1; $i <= $count; $i++)
                {
                    $firstNum = array_shift($array);
                    $array[] = $firstNum;
                }
            }
            else if($leftOrRight == "right")
            {
                for($i = 0; $i < $count; $i++)
                {
                    $lastNum = array_splice($array, count($array)-1, 1);
                    array_splice($array, 0, 0, $lastNum);
                }
            }
            break;
    }
}