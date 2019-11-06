<?php

function nXnMatrix($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($a = 1; $a <= $n; $a++) {
            echo $n . ' ';
        }
        echo PHP_EOL;
    }
}

nXnMatrix(intval(readline()));