<?php

$budget = floatval(readline());
$numStudents = intval(readline());
$lightsabersPrice = floatval(readline());
$robesPrice = floatval(readline());
$beltsPrice = floatval(readline());

$lightsabersPrice = (ceil($numStudents * 0.10) + $numStudents) * $lightsabersPrice ;
$robesPrice = $robesPrice * $numStudents;
$beltsPrice = ($numStudents - (floor($numStudents / 6))) * $beltsPrice;
$totalCost = $lightsabersPrice + $robesPrice + $beltsPrice;
if($budget >= $totalCost)
{
    echo "The money is enough - it would cost " . number_format($totalCost , 2, '.', '') . "lv.";
}
else
{
    echo "Ivan Cho will need " . number_format(($totalCost - $budget) , 2, '.', '') . "lv more.";
}
