<?php

class Student
{
    private $name;
    private $grades = [];
    private $averageGrade;

    public function __construct($name, $grades, $averageGrade)
    {
        $this->name = $name;
        $this->grades = $grades;
        $this->averageGrade = $averageGrade;
    }
    public function getGrades(): array
    {
        return $this->grades;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAverageGrade($averageGrade): void
    {
        $this->averageGrade = $averageGrade;
    }

    /**
     * @return mixed
     */
    public function getAverageGrade()
    {
        return $this->averageGrade;
    }
}


$n = readline();
$students = [];
while ($n-- > 0)
{
    $input = explode(' ', readline());
    $name = $input[0];
    $count = count($input);
    $grades = [];
    for($i = 1; $i < $count; $i++)
    {
        $grades[] = $input[$i];
    }
    $avg = array_sum($grades) / ($count - 1);
    $student = new Student($name, $grades, $avg);
    $students[] = $student;
}

usort($students, function (Student $s1, Student $s2)
{
    $avg1 = $s1->getAverageGrade();
    $avg2 = $s2->getAverageGrade();
    $name1 = $s1->getName();
    $name2 = $s2->getName();
    if($name1 == $name2)
    {
        return $avg2<=>$avg1;
    }
    return $name1 <=> $name2;
});

foreach ($students as $st)
{
    $name = $st->getName();
    $avg = $st->getAverageGrade();
    if($avg >= 5)
    {
        $avg = number_format($avg, 2, '.', '');
        echo "$name -> $avg\n";
    }
}