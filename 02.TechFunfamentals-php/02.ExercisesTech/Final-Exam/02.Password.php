<?php

$n = intval(readline());

for ($i = 0; $i < $n; $i++)
{
    $password = readline();
    $firstSymbol = strpos($password, '>');
    $lastSymbol = strrpos($password, '<');

    $firstGroup = substr($password, 0, $firstSymbol);
    $lastGroup = substr($password, $lastSymbol + 1);

    if ($firstGroup === $lastGroup)
    {
        $password = substr_replace($password, '', $lastSymbol, strlen($password));
        $password = substr_replace($password, '', 0, $firstSymbol + 1);
        $pattern = '/[\d]{3}\|[a-z]{3}\|[A-Z]{3}\|[^<>]{3}/';

        if(preg_match($pattern, $password))
        {
            echo "Password: " . str_replace('|', '', $password) . PHP_EOL;
        }
        else
        {
            echo "Try another password!" . PHP_EOL;
        }

    }
    else
    {
        echo "Try another password!" . PHP_EOL;
    }
}