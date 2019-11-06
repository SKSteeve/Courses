<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($fName, $lName, $ageee)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $ageee;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getAge()
    {
        return $this->age;
    }
}

$hum = new Person(readline(), readline(), readline());
echo "firstName: " . $hum->getFirstName() . PHP_EOL;
echo "lastName: " . $hum->getLastName() . PHP_EOL;
echo "age: " . $hum->getAge() . PHP_EOL;