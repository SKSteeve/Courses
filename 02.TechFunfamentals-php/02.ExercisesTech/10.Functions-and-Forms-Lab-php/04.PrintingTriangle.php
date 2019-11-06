<?php

function triangle($n)
{;
    for ($i = 1; $i <= $n; $i++) {
        $counter = 1;
        for ($a = 1; $a <= $i; $a++) {
            echo $counter . ' ';
            $counter++;
        }
        echo PHP_EOL;
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        $counter = 1;
        for ($a = 1; $a <= $i; $a++) {
            echo $counter . ' ';
            $counter++;
        }
        echo PHP_EOL;
    }
}

triangle(readline());