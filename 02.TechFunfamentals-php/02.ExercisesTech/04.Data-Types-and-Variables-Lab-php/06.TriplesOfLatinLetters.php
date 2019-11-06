<?php
$n = intval(readline());
for($i1 = 97; $i1 <= 96 + $n; $i1++)
{
    for($i2 = 97; $i2 <= 96 + $n; $i2++)
    {
        for($i3 = 97; $i3 <= 96 + $n; $i3++)
        {
            echo chr($i1).chr($i2).chr($i3) . PHP_EOL;
        }
    }
}
