<?php

$matrix = [];
$rowsAndCols = explode(', ', readline());
$rows = $rowsAndCols[0];

for ($i = 0; $i < $rows; $i++)
{
    $matrix[] = explode(', ', readline());
}

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
for($row = 0; $row < count($matrix); $row++)
{
    for($col = 0; $col < count($matrix[$row]); $col++)
    {
        $value = $matrix[$row][$col];
        if($value > $max)
        {
            $max = $value;
        }
        if($value < $min)
        {
            $min = $value;
        }
    }
}

echo "Min: $min" . PHP_EOL . "Max: $max";