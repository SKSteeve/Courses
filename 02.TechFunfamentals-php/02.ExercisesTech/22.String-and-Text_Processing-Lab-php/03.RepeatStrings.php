<?php

$words = explode(' ', readline());

foreach ($words as &$word)
{
    $count = strlen($word);
    echo str_repeat($word, $count);
}