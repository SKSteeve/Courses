<?php

$bannedWords = explode(", ", readline());
$text = readline();

for ($i = 0; $i < count($bannedWords); $i++)
{
    $text = str_replace($bannedWords[$i], str_repeat('*', strlen($bannedWords[$i])), $text);
}
echo  $text;
