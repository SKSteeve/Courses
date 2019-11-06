<?php

$numbers = array_map('intval', explode(' ', readline()));
$result = $numbers[0];
for ($i = 1; $i < count($numbers); $i++)
{
    $result = $result ^ $numbers[$i];
}
echo $result;