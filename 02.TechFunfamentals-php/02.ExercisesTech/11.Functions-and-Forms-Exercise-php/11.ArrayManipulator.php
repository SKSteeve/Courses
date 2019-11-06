<?php

$arr = array_map('intval', explode(' ', readline()));
$count = count($arr);
while (true) {
    $input = readline();
    if ($input == "end") {
        break;
    }
    $commands = explode(' ', $input);
    $action = $commands[0];

    switch ($action) {
        case 'exchange':
            $index = $commands[1];
            if ($index < 0 || $index >= $count) {
                echo "Invalid index" . PHP_EOL;
            } else {
                $arr = exchange($arr, $index);
            }
            break;
        case 'max':
            $evenOrOdd = $commands[1];
            if ($evenOrOdd == "even") {
                maxEvenIndex($arr);
            } else {
                maxOddIndex($arr);
            }
            break;
        case 'min':
            $evenOrOdd = $commands[1];
            if ($evenOrOdd == "even") {
                minEvenIndex($arr);
            } else {
                minOddIndex($arr);
            }
            break;
        case 'first':
            $evenOrOdd = $commands[2];
            $countNums = $commands[1];
            if ($evenOrOdd == "even") {
                firstEvenNums($arr, $countNums);
            } else {
                firstOddNums($arr, $countNums);
            }
            break;
        case 'last':
            $evenOrOdd = $commands[2];
            $countNums = $commands[1];
            if ($evenOrOdd == "even") {
                lastEvenNums($arr, $countNums);
            } else {
                lastOddNums($arr, $countNums);
            }
            break;
    }
}

echo "[" . implode(', ', $arr) . "]";

// FUNCTIONS

function exchange($arr, $index)
{
    $firstArr = [];
    $secondArr = [];

    for ($i = 0; $i <= $index; $i++) {
        $secondArr[] = $arr[$i];
    }
    for ($i = $index + 1; $i < count($arr); $i++) {
        $firstArr[] = $arr[$i];
    }
    $arr = array_merge($firstArr, $secondArr);
    return $arr;
}

function maxEvenIndex($array)
{
    $index = -1;
    $maxEven = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0 && $array[$i] >= $maxEven) {
            $index = $i;
            $maxEven = $array[$i];
        }
    }
    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function minEvenIndex($array)
{
    $index = -1;
    $minEven = PHP_INT_MAX;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0 && $array[$i] <= $minEven) {
            $index = $i;
            $minEven = $array[$i];
        }
    }
    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function maxOddIndex($array)
{
    $index = -1;
    $maxOdd = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 !== 0 && $array[$i] >= $maxOdd) {
            $index = $i;
            $maxOdd = $array[$i];
        }
    }
    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function minOddIndex($array)
{
    $index = -1;
    $minOdd = PHP_INT_MAX;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 !== 0 && $array[$i] <= $minOdd) {
            $index = $i;
            $minOdd = $array[$i];
        }
    }
    if ($index == -1) {
        echo "No matches" . PHP_EOL;
    } else {
        echo $index . PHP_EOL;
    }
}

function firstEvenNums($array, $countNum)
{
    if ($countNum > count($array)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $firstEvNums = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0 && $countNum > count($firstEvNums)) {
            $firstEvNums[] = $array[$i];
        }
    }
    if ($countNum == 0 || count($firstEvNums) == 0) {
        echo "[]" . PHP_EOL;
        return;
    }
    echo '[' . implode(', ', $firstEvNums) . ']' . PHP_EOL;
}

function lastEvenNums($array, $countNum)
{
    if ($countNum > count($array)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $lastEvNums = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if ($array[$i] % 2 == 0 && $countNum > count($lastEvNums)) {
            $lastEvNums[] = $array[$i];
        }
    }
    if ($countNum == 0 || count($lastEvNums) == 0) {
        echo "[]" . PHP_EOL;
        return;
    }
    echo '[' . implode(', ', array_reverse($lastEvNums)) . ']' . PHP_EOL;
}

function lastOddNums($array, $countNum)
{
    if ($countNum > count($array)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $lastOddNums = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        if ($array[$i] % 2 != 0 && $countNum > count($lastOddNums)) {
            $lastOddNums[] = $array[$i];
        }
    }
    if ($countNum == 0 || count($lastOddNums) == 0) {
        echo "[]" . PHP_EOL;
        return;
    }
    echo '[' . implode(', ', array_reverse($lastOddNums)) . ']' . PHP_EOL;
}

function firstOddNums($array, $countNum)
{
    if ($countNum > count($array)) {
        echo "Invalid count" . PHP_EOL;
        return;
    }
    $firstOddNums = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 != 0 && $countNum > count($firstOddNums)) {
            $firstOddNums[] = $array[$i];
        }
    }
    if ($countNum == 0 || count($firstOddNums) == 0) {
        echo "[]" . PHP_EOL;
        return;
    }
    echo '[' . implode(', ', $firstOddNums) . ']' . PHP_EOL;
}