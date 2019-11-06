<?php
$n = intval(readline());
$sum = 0;
for($i = 1; $i <= $n * 2; $i+=2)
{
    echo $i . PHP_EOL;
    $sum += $i;
}
echo "Sum: " . $sum;