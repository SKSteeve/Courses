<?php

$words = explode(" ", readline());

$firstWord = $words[0];
$secondWord = $words[1];

$min = min(strlen($firstWord), strlen($secondWord));
$max = max(strlen($firstWord), strlen($secondWord));

$sum = 0;

for($i = 0; $i < $min; $i++)
{
    $code1 = ord($firstWord[$i]);
    $code2 = ord($secondWord[$i]);
    $sum += $code1 * $code2;
}

if(strlen($firstWord) > strlen($secondWord))
{
    $remaining = substr($firstWord, $min);
}
else
{
    $remaining = substr($secondWord, $min);
}

for($i = 0; $i < strlen($remaining); $i++)
{
    $code = ord($remaining[$i]);
    $sum += $code;
}

echo $sum;