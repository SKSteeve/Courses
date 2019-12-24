<?php

$str = readline();

for ($i = 1; $i < strlen($str); $i++)
{
    if($str[$i - 1] == $str[$i])
    {
        $str[$i - 1] = '~';
    }
}

echo str_replace('~', '', $str);
