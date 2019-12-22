<?php

$text = readline();
$searchWord = readline();
$counter = 0;

$text = str_replace(['.',',','?','!',' '], '-', $text);
$words = explode('-', $text);

foreach ($words as $word)
{
    if ($word == $searchWord)
    {
        $counter++;
    }
}

echo $counter;