<?php

$num = intval(readline());
$students = [];
for($i = 0; $i < $num; $i++)
{
    $studentName = readline();
    $grade = floatval(readline());

    $students[$studentName][] = $grade;
}

$studentsAvgGrades = [];
foreach ($students as $name => $grades)
{
    $avgGrade = 0;
    $countGrades = count($grades);
    for($i = 0; $i < $countGrades; $i++)
    {
        $avgGrade += $grades[$i];
    }
    $avgGrade = number_format($avgGrade / $countGrades, 2, '.', '');
    if($avgGrade < 4.50)
    {
        continue;
    }
    $studentsAvgGrades[$name] = $avgGrade;
}
arsort($studentsAvgGrades);
foreach ($studentsAvgGrades as $name => $avgGrade)
{
    echo "$name -> $avgGrade" . PHP_EOL;
}