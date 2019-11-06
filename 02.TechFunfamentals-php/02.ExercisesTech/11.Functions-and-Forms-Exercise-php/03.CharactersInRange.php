<?php

$firstChar = readline();
$secondChar = readline();

function charsInRange($char1,$char2)
{
    if($char1 > $char2)
    {
        $switch = $char1;
        $char1 = $char2;
        $char2 = $switch;
    }
    for ($i = ord($char1) + 1; $i < ord($char2); $i++)
    {
        echo chr($i) . " ";
    }
}

charsInRange($firstChar,$secondChar);