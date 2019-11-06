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

    /**
     * @return mixed
     */
    public function getHomeTown()
    {
        return $this->homeTown;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}

$input = readline();
$students = [];
while($input != "end")
{
    $param = explode(' ', $input);
    $student = new Student($param[0], $param[1], $param[2], $param[3]);
    $students[] = $student;
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


