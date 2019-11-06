<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $homeTown;

    public function __construct($fName, $lName, $age, $city)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
        $this->homeTown = $city;
    }
    public function getHomeTown()
    {
        return $this->homeTown;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setAge($age): void
    {
        $this->age = $age;
    }
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }
    public function setHomeTown($homeTown): void
    {
        $this->homeTown = $homeTown;
    }
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }
    public function __toString()
    {
        return $this->firstName.' '.$this->lastName;
    }
}

$input = readline();
$students = [];
while($input != "end")
{
    $param = explode(' ', $input);
    if(in_array($param[0]. ' '. $param[1],$students))
    {
        $index = array_search($param[0]. ' '. $param[1], $students);
        $students[$index]->setAge($param[2]);
        $students[$index]->setHomeTown($param[3]);
    }
    else
    {
        $student = new Student($param[0], $param[1], $param[2], $param[3]);
        $students[] = $student;
    }
    $input = readline();
}

$cityFilter = readline();

foreach ($students as $studentt)
{
    if ($cityFilter == $studentt->getHomeTown())
    {
        echo $studentt->getFirstName(). ' ' . $studentt->getLastName() . ' is ' . $studentt->getAge() . ' years old.' . PHP_EOL;
    }
}