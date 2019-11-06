<?php

$lessons = explode(', ', readline());

$input = readline();
while($input != "course start")
{
    $tokens = explode(':', $input);
    $command = $tokens[0];
    $lessonTitle = $tokens[1];
    switch ($command)
    {
        case "Add":
            if(!in_array($lessonTitle, $lessons))
            {
                $lessons[] = $lessonTitle;
            }
            break;
        case "Insert":
            $indexToInsertOn = $tokens[2];
            if(!in_array($lessonTitle, $lessons))
            {
                array_splice($lessons, $indexToInsertOn, 0, $lessonTitle);
            }
            break;
        case "Remove":
            if(in_array($lessonTitle, $lessons))
            {
                $indexToRemove = array_search($lessonTitle, $lessons);
                array_splice($lessons, $indexToRemove, 1);
            }
            break;
        case "Swap":
            $lessonTitle2 = $tokens[2];
            if(in_array($lessonTitle, $lessons) && in_array($lessonTitle2, $lessons))
            {
                $indexLesT1 = array_search($lessonTitle, $lessons);
                $indexLesT2 = array_search($lessonTitle2, $lessons);
                array_splice($lessons, $indexLesT1, 1, $lessonTitle2);
                array_splice($lessons, $indexLesT2, 1, $lessonTitle);
            }
            break;
        case "Exercise":
            $existsOrNot = false;
            for($i = 0; $i < count($lessons); $i++)
            {
                if(strpos($lessons[$i], 'Exercise'))
                {
                    $existsOrNot = true;
                }
            }
            if(in_array($lessonTitle, $lessons) && !$existsOrNot)
            {
                $lessonTitleIndex = array_search($lessonTitle, $lessons);
                $exerciseTitle = $lessonTitle . "-" . "Exercise";
                array_splice($lessons, $lessonTitleIndex + 1, 0, $exerciseTitle);
            }
            else if(!in_array($lessonTitle, $lessons))
            {
                $lessons[] = $lessonTitle;
                $exerciseTitle = $lessonTitle . "-" . "Exercise";
                $lessons[] = $exerciseTitle;
            }
            break;
    }
    $input = readline();
}
for($i = 0; $i < count($lessons); $i++)
{
    echo $i+1 . "." . $lessons[$i] . PHP_EOL;
}


