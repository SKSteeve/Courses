<?php

$usernameWanted = readline();

$command = readline();

while($command != "Sign up")
{
    $commandInfo = explode(' ', $command);
    $mainCommand = $commandInfo[0];

    switch ($mainCommand)
    {
        case "Case":
            $lowerOrUpper = $commandInfo[1];
            if($lowerOrUpper == "lower")
            {
                $usernameWanted = strtolower($usernameWanted);
            }
            else
            {
                $usernameWanted = strtoupper($usernameWanted);
            }
            echo $usernameWanted . PHP_EOL;
            break;
        case "Reverse":
            $startIndex = $commandInfo[1];
            $endIndex = $commandInfo[2];
            if($startIndex >= 0 && $endIndex < strlen($usernameWanted))
            {
                $subStr = strrev(substr($usernameWanted, $startIndex, $endIndex - $startIndex + 1));
                echo $subStr . PHP_EOL;
            }
            break;
        case "Cut":
            $subStr = $commandInfo[1];
            if (strpos($usernameWanted, $subStr))
            {
                $usernameWanted = str_replace($subStr, '', $usernameWanted);
                echo $usernameWanted . PHP_EOL;
            }
            else
            {
                echo "The word $usernameWanted doesn't contain $subStr." . PHP_EOL;
            }
            break;
        case "Replace":
            $char = $commandInfo[1];
            $usernameWanted = str_replace($char, '*', $usernameWanted);
            echo $usernameWanted . PHP_EOL;
            break;
        case "Check":
            $char = $commandInfo[1];
            if (strpos($usernameWanted, $char))
            {
                echo "Valid" . PHP_EOL;
            }
            else
            {
                echo "Your username must contain $char." . PHP_EOL;
            }
            break;
    }

    $command = readline();
}