<?php

$pattern = '/\b(?<day>\d{2})([-.\/])(?<month>[A-Z][a-z]{2})\2(?<year>\d{4})\b/';

$datesAsStr = readline();

preg_match_all($pattern, $datesAsStr, $dates);

$matchesCount = count($dates[0]);

for ($i = 0; $i < $matchesCount; $i++)
{
    $day = $dates['day'][$i];
    $month = $dates['month'][$i];
    $year = $dates['year'][$i];

    echo "Day: $day, Month: $month, Year: $year" . PHP_EOL;
}
