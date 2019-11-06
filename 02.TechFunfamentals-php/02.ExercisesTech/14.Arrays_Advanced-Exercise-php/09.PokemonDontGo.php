<?php

$arr = array_map('intval', explode(' ', readline()));
$arrDeletedElements = [];
while(true)
{
    if(count($arr) == 0)
    {
        $sum = 0;
        for($i = 0; $i < count($arrDeletedElements); $i++)
        {
            $sum += $arrDeletedElements[$i];
        }
        echo $sum;
        return;
    }
    $index = intval(readline());
    if($index >= 0 && $index < count($arr))
    {
        $valueElement = $arr[$index];
        array_splice($arr, $index, 1);
        $arrDeletedElements[] = $valueElement;
        $arr = increaseOrDecrease($arr, $valueElement);
    }
    else if($index < 0)
    {
        $valueElement = $arr[0];
        array_splice($arr, 0, 1, $arr[count($arr) - 1]);
        $arrDeletedElements[] = $valueElement;
        $arr = increaseOrDecrease($arr, $valueElement);
    }
    else if($index > count($arr)-1)
    {
        $valueElement = $arr[count($arr) - 1];
        array_splice($arr, count($arr) - 1, 1, $arr[0]);
        $arrDeletedElements[] = $valueElement;
        $arr = increaseOrDecrease($arr, $valueElement);
    }
}
implode(' ',$arr);



function increaseOrDecrease($array,$deletedEle)
{
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] <= $deletedEle)
        {
            $array[$i] += $deletedEle;
        }
        else
        {
            $array[$i] -= $deletedEle;
        }
    }
    return $array;
}