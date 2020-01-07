<?php

$input = readline();

$phoneBook = [];
$pattern = '/^[0-9]*$/';

while($input != "Over")
{
    $nameNumb = explode(" : ", $input);
    $str1 = $nameNumb[0];
    $str2 = $nameNumb[1];

    if (preg_match($pattern, $str1))
    {
        $phoneBook[$str2] = $str1;
    }
    else
    {
        $phoneBook[$str1] = $str2;
    }

    $input = readline();
}

ksort($phoneBook);
foreach ($phoneBook as $name => $number)
{
    echo "$name -> $number" . PHP_EOL;
}