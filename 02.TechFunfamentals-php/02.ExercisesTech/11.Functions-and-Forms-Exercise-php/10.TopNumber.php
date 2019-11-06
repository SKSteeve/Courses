<?php

function topNum($number)
{
    for ($currNum = 1; $currNum <= $number; $currNum++) {
        $sumDigits = 0;
        $count = strlen($currNum);
        $currNum = (string)$currNum;
        for ($index = 0; $index < $count; $index++) {
            $sumDigits += $currNum[$index];
        }
        $divisible = false;
        if ($sumDigits % 8 == 0) {
            $divisible = true;
        }
        for ($a = 0; $a < $count; $a++) {
            if (intval($currNum[$a]) % 2 != 0 && $divisible) {
                echo intval($currNum) . PHP_EOL;
                break;
            }
        }
    }
}
topNum(readline());