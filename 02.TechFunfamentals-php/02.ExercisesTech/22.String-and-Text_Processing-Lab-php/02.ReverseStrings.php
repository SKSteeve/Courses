<?php

$command = readline();
$arrOfWords = [];
while($command != "end")
{
    $word = $command;
    $oldWord = $word;
    $revWord = strrev($word);
    $arrOfWords[$oldWord] = $revWord;


    $command = readline();
}

foreach ($arrOfWords as $key => $value)
{
    echo $key . " = " . $value . PHP_EOL;
}