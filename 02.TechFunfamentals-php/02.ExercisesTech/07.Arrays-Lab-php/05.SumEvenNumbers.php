<?php
$arr = array_map('intval',explode(' ' , readline()));
$sum = 0;
for($i = count($arr)-1; $i >= 0; $i--)
{
    if($arr[$i] % 2 == 0)
    {
        $sum += $arr[$i];
    }
}
echo $sum;