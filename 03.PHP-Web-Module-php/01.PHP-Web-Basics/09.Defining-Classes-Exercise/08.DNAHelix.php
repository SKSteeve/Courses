<?php

$input = intval(readline());
dnaHelix($input);

function dnaHelix($number)
{
    $str = "ATCGTTAGGG";
    $counter = 0;

    for($i = 0; $i < $number; $i++)
    {
        if($i % 4 == 0)
        {
            echo "**" . $str[$counter % 10] . $str[$counter % 10 + 1] . "**";
        }
        else if($i % 4 == 1)
        {
            echo "*" . $str[$counter % 10] . "--" . $str[$counter % 10 + 1] . "*";
        }
        else if($i % 4 == 2)
        {
            echo $str[$counter % 10] . "----" . $str[$counter % 10 + 1];
        }
        else if($i % 4 == 3)
        {
            echo "*" . $str[$counter % 10] . "--" . $str[$counter % 10 + 1] . "*";
        }

        $counter += 2;
        echo PHP_EOL;
    }
}