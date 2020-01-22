<?php

$speed = readline();
$area = readline();

$diff = $speed - roadLimit($area);
if($diff >= 0 && $diff <= 20)
{
    echo "speeding";
}
else if($diff > 20 && $diff <= 40)
{
    echo "excessive speeding";
}
else if($diff > 40)
{
    echo "reckless driving";
}

function roadLimit(string $area)
{
    $limit = 0;
    switch ($area)
    {
        case "motorway":
            $limit = 130;
            break;
        case "interstate":
            $limit = 90;
            break;
        case "city":
            $limit = 50;
            break;
        case "residential":
            $limit = 20;
            break;
    }

    return $limit;
}