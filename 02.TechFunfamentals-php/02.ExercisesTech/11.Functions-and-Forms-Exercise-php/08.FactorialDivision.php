<?php

function factorialN1($n1)
{
    $factorailn1 = 1;
    for($i = 1; $i <= $n1; $i++)
    {
        $factorailn1 *= $i;
    }
    return $factorailn1;
}
$fact1 = factorialN1(intval(readline()));
function factorialN2($n2)
{
    $factorailn1 = 1;
    for($i = 1; $i <= $n2; $i++)
    {
        $factorailn1 *= $i;
    }
    return $factorailn1;
}
$fact2 = factorialN2(intval(readline()));
function factorialDivision($firstNum,$secondNum)
{
    $division = $firstNum / $secondNum;
    return $division;
}
echo number_format(factorialDivision($fact1, $fact2), 2, '.', '');