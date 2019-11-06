<?php

function midChars($word)
{
    $countWord = strlen($word);
    $midChar = '';
    if($countWord % 2 == 0)
    {
        //stefan
        $index = intval($countWord / 2);
        $midChar = $word[$index - 1] . $word[$index];
    }
    else
    {
        $index = intval($countWord / 2);
        $midChar = $word[$index];
    }
    return $midChar;
}

echo midChars(readline());