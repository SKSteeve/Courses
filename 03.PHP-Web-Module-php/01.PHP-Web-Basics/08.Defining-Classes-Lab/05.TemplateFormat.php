<?php

$qA = explode(', ', readline());
echo xmlFormat($qA);

function xmlFormat(array $questionsAndAnswers)
{
    $output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . PHP_EOL
        . "<quiz>" . PHP_EOL;

    for ($i = 0; $i < count($questionsAndAnswers); $i++)
    {
        if($i % 2 == 0)
        {
            $output .= "  <question>" . PHP_EOL;
        }
        else
        {
            $output .= "  <answer>" . PHP_EOL;
        }


        $output .= "    $questionsAndAnswers[$i]" . PHP_EOL;


        if($i % 2 == 0)
        {
            $output .= "  </question>" . PHP_EOL;
        }
        else
        {
            $output .= "  </answer>" . PHP_EOL;
        }
    }

    $output .= "</quiz>";
    return $output;
}

