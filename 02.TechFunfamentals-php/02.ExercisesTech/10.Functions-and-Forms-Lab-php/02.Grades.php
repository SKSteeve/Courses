<?php

function gradeInWords($n)
{
    if($n >= 2.00 && $n <= 2.99)
    {
        echo 'Fail';
    }
    else if($n >= 3.00 && $n <= 3.49)
    {
        echo 'Poor';
    }
    else if($n >= 3.50 && $n <= 4.49)
    {
        echo 'Good';
    }
    else if($n >= 4.50 && $n <= 5.49)
    {
        echo 'Very good';
    }
    else
    {
        echo 'Excellent';
    }
}

$grade = readline();
gradeInWords($grade);