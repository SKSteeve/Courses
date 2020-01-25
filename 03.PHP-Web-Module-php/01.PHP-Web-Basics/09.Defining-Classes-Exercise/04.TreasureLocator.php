<?php

$coordinates = explode(", ", readline());
treasureLocator($coordinates);

function treasureLocator(array $coordinates)
{
    for ($i = 0; $i < count($coordinates); $i+=2)
    {
        $x = $coordinates[$i];
        $y = $coordinates[$i+1];

        if($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3)
        {
            echo "Tuvalu";
        }
        else if($x >= 0 && $x <= 2 && $y >= 6 && $y <= 9)
        {
            echo "Tonga";
        }
        else if($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6)
        {
            echo "Samoa";
        }
        else if($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8)
        {
            echo "Cook";
        }
        else if($x >= 8 && $x <= 9 && $y >= 0 && $y <= 1)
        {
            echo "Tokelau";
        }
        else
        {
            echo "On the bottom of the ocean";
        }

        echo PHP_EOL;
    }
}
