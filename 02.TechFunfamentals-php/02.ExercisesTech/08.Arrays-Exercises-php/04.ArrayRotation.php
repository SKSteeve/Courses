<?php

$arr = explode(' ' , readline());
$num = intval(readline());

for($i = 0; $i < $num; $i++)
{
    $arr[] = $arr[$i];
    unset($arr[$i]);
}

$result = array_merge($arr);
echo implode( ' ',$result);

/*
    $arr = explode(' ' , readline());
    $n = intval(readline());
    for($i = 0; $i < $n; $i++)
    {
         $deleted = array_shift($arr);
         $arr[] = $deleted;
    }
    echo implode( ' ',$arr);

            //// Its the Same as the code Above (array_shift saves the index);
*/



/*          How To Optimize the code (as little as possible do the For() cicle):
                                it will save - memory && time
                                        Example:


$arr = explode(' ' , readline());
$num = intval(readline());
$rotations = $num % count($arr);
*/



