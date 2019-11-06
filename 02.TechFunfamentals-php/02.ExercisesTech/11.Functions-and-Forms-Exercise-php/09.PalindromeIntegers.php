<?php

function palindrome($command)
{
    while ($command != "END") {
        $count = strlen($command);
        $string = $command;
        $newStr = '';
        for ($i = $count - 1; $i >= 0; $i--) {
            $newStr .= $string[$i];
        }
        if ($newStr == $string) {
            echo "true" . PHP_EOL;
        } else {
            echo "false" . PHP_EOL;
        }
        $command = readline();
    }
}

palindrome(readline());