<?php

$string = readline();

function vowelsCount($str)
{
    $count = 0;
    $str = strtolower($str);
    for($i = 0; $i < strlen($str); $i++)
    {
        if($str[$i] == 'a')
        {
            $count++;
        }
        else if($str[$i] == 'o')
        {
            $count++;
        }
        else if($str[$i] == 'u')
        {
            $count++;
        }
        else if($str[$i] == 'y')
        {
            $count++;
        }
        else if($str[$i] == 'i')
        {
            $count++;
        }
        else if($str[$i] == 'e')
        {
            $count++;
        }
    }
    return $count;
}
echo vowelsCount($string);