<?php

$input = explode(', ', readline());

$n = $input[0];
$pattern = $input[1];

switch ($pattern)
{
    case 'A':
        pattA($n);
        break;
    case 'B':
        pattB($n);
        break;
}



function pattA($n)
{
    $matrix = [];
    for($r = 1; $r <= $n; $r++)
    {
        $arr = [];
        for ($c = $r; $c <= $n * $n; $c+=$n)
        {
            $arr[] = $c;
        }
        $matrix[] = $arr;
    }

    foreach ($matrix as $key => $arr)
    {
        foreach ($arr as $value)
        {
            echo $value . ' ';
        }
        echo PHP_EOL;
    }

}

function pattB($n)
{
    $matrix = [];
    for($r = 1; $r <= $n; $r++)
    {
        $arr = [];
        for ($c = $r; $c <= $n * $n; $c+=$n)
        {
            $arr[] = $c;
        }
        $matrix[] = $arr;
    }


    $matrix2 = [];
    foreach ($matrix as $key => $arr)
    {
        for($i = 0; $i < count($arr) ; $i++)
        {
            if(!key_exists($i, $matrix2))
            {
                $matrix2[$i] = [$arr[$i]];
            }
            else
            {
                $matrix2[$i][] = $arr[$i];
            }
        }
    }

    for($i = 1; $i <= count($matrix2); $i++)
    {
        if($i % 2 == 0)
        {
            $matrix2[$i-1] = array_reverse($matrix2[$i-1]);
        }
    }

    $count = 0;
    $a = 0;
    for ($i = 0; $i < $n; $i++)
    {
        foreach ($matrix2 as $arr)
        {
            if($count % $n == 0 && $count != 0)
            {
                $a++;
                echo PHP_EOL;
            }
            echo $arr[$a] . ' ';
            $count++;
        }
    }
}