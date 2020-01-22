<?php

isPalindrome(readline());

function isPalindrome(string $str)
{
    $secondStr = '';
    for($i = strlen($str) - 1; $i >= 0 ; $i--)
    {
        $secondStr .= $str[$i];
    }

    if($str == $secondStr)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}