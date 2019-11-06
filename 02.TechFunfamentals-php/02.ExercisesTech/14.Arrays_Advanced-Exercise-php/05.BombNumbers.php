<?php


$arr = array_map('intval', explode(' ', readline()));
$tokens = array_map('intval', explode(' ', readline()));
$bombNum = intval($tokens[0]);
$power = intval($tokens[1]);

while(in_array($bombNum,$arr))
{
    $indexToBomb = array_search($bombNum, $arr);
    array_splice($arr, $indexToBomb + 1, $power);
    array_splice($arr, $indexToBomb - $power, $power + 1);
}
$sum = 0;
for($i = 0; $i < count($arr); $i++)
{
    $sum += $arr[$i];
}
echo $sum;

