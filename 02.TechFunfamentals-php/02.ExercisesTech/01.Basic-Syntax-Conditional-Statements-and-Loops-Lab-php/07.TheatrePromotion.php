<?php

$dayType = readline();
$age = intval(readline());

$price = 0;

if($age >= 0 && $age <= 18)
{
    switch ($dayType)
    {
        case "Weekday":
            $price = 12;
            break;
        case "Weekend":
            $price = 15;
            break;
        case "Holiday":
            $price = 5;
            break;
    }
    echo $price . "$";
}
else if($age >= 19 && $age <= 64)
{
    switch ($dayType)
    {
        case "Weekday":
            $price = 18;
            break;
        case "Weekend":
            $price = 20;
            break;
        case "Holiday":
            $price = 12;
            break;
    }
    echo $price . "$";
}
else if($age >= 65 && $age <= 122)
{
    switch ($dayType)
    {
        case "Weekday":
            $price = 12;
            break;
        case "Weekend":
            $price = 15;
            break;
        case "Holiday":
            $price = 10;
            break;
    }
    echo $price . "$";
}
else
{
    echo "Error!";
}