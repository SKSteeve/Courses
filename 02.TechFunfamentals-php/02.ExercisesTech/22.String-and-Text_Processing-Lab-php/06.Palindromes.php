<?php

$text = readline();

$text = str_replace(['.',',','?',' ','!'], '-', $text);
$words = explode('-', $text);
$words = array_filter($words);

$palindromes = [];
foreach ($words as $word)
{
    $reversedWord = strrev($word);
    if($reversedWord == $word && !in_array($word, $palindromes))
    {
        $palindromes[] = $reversedWord;
    }
}

natcasesort($palindromes);

echo implode(', ', $palindromes);