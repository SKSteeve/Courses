<?php

$arr = array_map('intval', (explode(' ', readline())));

for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i] < 0)
    {
        array_splice($arr, $i, 1);
        $i--;
    }
}

$arr = array_reverse($arr);

if(count($arr) <= 0)
{
    echo "empty";
}
else
{
    echo implode(' ', $arr);
}