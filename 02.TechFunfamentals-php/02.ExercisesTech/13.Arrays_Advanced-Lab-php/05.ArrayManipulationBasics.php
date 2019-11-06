<?php

$arr = array_map('intval', explode(' ', readline()));
$input = readline();
while($input != "end")
{
    $tokens = explode(' ', $input);
    $command = $tokens[0];
    switch ($command)
    {
        case "Add":
            $numToAdd = $tokens[1];
            $arr[] = $numToAdd;
            break;
        case "Remove":
            $numToRemove = $tokens[1];
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] == $numToRemove)
                {
                    array_splice($arr, $i, 1);
                }
            }
            break;
        case "RemoveAt":
            $numAtIndexToRemove = $tokens[1];
            array_splice($arr, $numAtIndexToRemove, 1);
            break;
        case "Insert":
            $numToInsert = $tokens[1];
            $indexToInsert = $tokens[2];
            array_splice($arr, $indexToInsert, 0, $numToInsert);
            break;
    }
    $input = readline();
}
echo implode(' ', $arr);