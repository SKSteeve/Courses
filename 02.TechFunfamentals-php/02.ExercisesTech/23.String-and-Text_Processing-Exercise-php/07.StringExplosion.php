<?php

$str = readline();
$bomb = 0;

for ($i = 0; $i < strlen($str); $i++)
{
    if ($bomb > 0 && $str[$i] != '>')
    {
        $str = substr_replace($str, '', $i, 1);
        $bomb--;
        $i--;
    }
    else if ($str[$i] == '>')
    {
        $bomb += intval($str[$i + 1]);
    }
}
echo $str;