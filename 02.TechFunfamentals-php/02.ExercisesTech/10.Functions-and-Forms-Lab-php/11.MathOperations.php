<?php

function calculate($a, $operator, $b)
{
    $result = 0.0;
    switch ($operator)
    {
        case '/':
            $result = $a / $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
    }
    $result = number_format($result, 2, '.', '');
    return $result;
}

echo calculate(intval(readline()), readline(), intval(readline()));