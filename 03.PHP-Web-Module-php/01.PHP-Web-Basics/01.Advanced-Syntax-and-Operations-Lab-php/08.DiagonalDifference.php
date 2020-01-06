<?php

$matrix = [];
$rows = intval(readline());

for ($i = 0; $i < $rows; $i++)
{
    $matrix[] = explode(' ', readline());
}

$rightDiag = 0;
$leftDiag = 0;
$col = count($matrix) - 1;
for ($i = 0; $i < count($matrix); $i++)
{
    $rightDiag += $matrix[$i][$i];
    $leftDiag += $matrix[$i][$col];
    $col--;
}

echo abs($rightDiag - $leftDiag);
