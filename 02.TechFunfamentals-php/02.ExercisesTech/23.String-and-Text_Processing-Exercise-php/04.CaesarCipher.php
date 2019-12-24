<?php

$text = readline();
$encrypted = '';

for($i = 0; $i < strlen($text); $i++)
{
    $symbolCode = ord($text[$i]) + 3;
    $encrypted .= chr($symbolCode);
}

echo $encrypted;