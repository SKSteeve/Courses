<?php

$groupNumber = intval(readline());
$groupType = readline();
$day = readline();

$price = 0;

if($day == "Friday")
{
    switch ($groupType)
    {
        case "Students":
            $price = 8.45;
            $price *= $groupNumber;
            if($groupNumber >= 30)
            {
                $percent = $price * 0.15;
                $price -= $percent;
            }
            break;
        case "Business":
            $price = 10.90;
            $price *= $groupNumber;
            if($groupNumber >= 100)
            {
                $percent = $price * 0.10;
                $price -= $percent;
            }
            break;
        case "Regular":
            $price = 15;
            $price *= $groupNumber;
            if($groupNumber >= 10 && $groupNumber <= 20)
            {
                $percent = $price * 0.05;
                $price -= $percent;
            }
            break;
    }
}
else if($day == "Saturday")
{
    switch ($groupType)
    {
        case "Students":
            $price = 9.80;
            $price *= $groupNumber;
            if($groupNumber >= 30)
            {
                $percent = $price * 0.15;
                $price -= $percent;
            }
            break;
        case "Business":
            $price = 15.60;
            $price *= $groupNumber;
            if($groupNumber >= 100)
            {
                $percent = $price * 0.10;
                $price -= $percent;
            }
            break;
        case "Regular":
            $price = 20;
            $price *= $groupNumber;
            if($groupNumber >= 10 && $groupNumber <= 20)
            {
                $percent = $price * 0.05;
                $price -= $percent;
            }
            break;
    }
}
else if($day == "Sunday")
{
    switch ($groupType)
    {
        case "Students":
            $price = 10.46;
            $price *= $groupNumber;
            if($groupNumber >= 30)
            {
                $percent = $price * 0.15;
                $price -= $percent;
            }
            break;
        case "Business":
            $price = 16;
            $price *= $groupNumber;
            if($groupNumber >= 100)
            {
                $percent = $price * 0.10;
                $price -= $percent;
            }
            break;
        case "Regular":
            $price = 22.50;
            $price *= $groupNumber;
            if($groupNumber >= 10 && $groupNumber <= 20)
            {
                $percent = $price * 0.05;
                $price -= $percent;
            }
            break;
    }
}
echo "Total price: " . number_format($price , 2 , '.' , '');