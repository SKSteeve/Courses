<?php

$input = readline();
$coursesAndSt = [];

while($input != "end")
{
    $coursNameAndStudentName = explode(' : ', $input);
    $coursName = $coursNameAndStudentName[0];
    $studentName = $coursNameAndStudentName[1];

    $coursesAndSt[$coursName][] = $studentName;


    $input = readline();
}
uksort($coursesAndSt, function($length1, $length2) use($coursesAndSt){
   $len1 = count($coursesAndSt[$length1]);
   $len2 = count($coursesAndSt[$length2]);
   return $len2<=>$len1;
});
foreach ($coursesAndSt as $course => $students)
{
    sort($coursesAndSt[$course]);
}
foreach ($coursesAndSt as $nameCourse => $student)
{
    echo "$nameCourse: " . count($student) . PHP_EOL;
    for($i = 0; $i < count($student); $i++)
    {
        echo "-- $student[$i]" . PHP_EOL;
    }
}