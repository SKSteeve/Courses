<?php

$input = readline();
$nameAndDeck = [];
while ($input != "JOKER")
{
    $allData = explode(': ', $input);
    $name = $allData[0];
    $deck = explode(', ', $allData[1]);

    if(key_exists($name,$nameAndDeck))
    {
        for($i = 0; $i <count($deck); $i++)
        {
            if(!in_array($deck[$i], $nameAndDeck[$name]))
            {
                $nameAndDeck[$name][] = $deck[$i];
            }
        }
    }
    else
    {
        $nameAndDeck[$name] = [];
        for($i = 0; $i <count($deck); $i++)
        {
            if(!in_array($deck[$i], $nameAndDeck[$name]))
            {
                $nameAndDeck[$name][] = $deck[$i];
            }
        }
    }
    $input = readline();
}


foreach ($nameAndDeck as $currName => $currDeck)
{
    $result = 0;
    for($i = 0; $i < count($currDeck); $i++)
    {
        $card = $currDeck[$i];
        $cardPoints = 1;
        for ($j = 0; $j < strlen($card); $j++)
        {
            $letter = $card[$j];
            switch ($letter)
            {
                case '0':
                    $cardPoints += 0;
                    break;
                case '2':
                    $cardPoints *= 2;
                    break;
                case '3':
                    $cardPoints *= 3;
                    break;
                case '4':
                    $cardPoints *= 4;
                    break;
                case '5':
                    $cardPoints *= 5;
                    break;
                case '6':
                    $cardPoints *= 6;
                    break;
                case '7':
                    $cardPoints *= 7;
                    break;
                case '8':
                    $cardPoints *= 8;
                    break;
                case '9':
                    $cardPoints *= 9;
                    break;
                case '1':
                    $cardPoints *= 10;
                    break;
                case 'J':
                    $cardPoints *= 11;
                    break;
                case 'Q':
                    $cardPoints *= 12;
                    break;
                case 'K':
                    $cardPoints *= 13;
                    break;
                case 'A':
                    $cardPoints *= 14;
                    break;
                case 'S':
                    $cardPoints *= 4;
                    break;
                case 'H':
                    $cardPoints *= 3;
                    break;
                case 'D':
                    $cardPoints *= 2;
                    break;
                case 'C':
                    $cardPoints *= 1;
                    break;
            }
        }
        $result += $cardPoints;
    }
    echo "$currName: $result".PHP_EOL;
}