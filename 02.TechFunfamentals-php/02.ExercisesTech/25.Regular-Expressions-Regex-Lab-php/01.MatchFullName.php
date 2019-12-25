<?php

$pattern = '/\b[A-Z][a-z]+ [A-Z][a-z]+/';

$names = readline();
preg_match_all($pattern, $names, $matches);

foreach ($matches[0] as $fullName)
{
    echo $fullName . ' ';
}