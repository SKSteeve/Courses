<?php

class Person
{
    private $name;
    private $id;
    private $age;

    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
}

$input = readline();
$people = [];
while ($input != "End")
{
    $fields = explode(' ', $input);
    $newPerson = new Person($fields[0], $fields[1], $fields[2]);
    $people[] = $newPerson;
    $input = readline();
}

usort($people, function(Person $p1, Person $p2){
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age1<=>$age2;
});

foreach ($people as $value)
{
    echo $value->getName() . " with ID: " . $value->getId(). " is " . $value->getAge() . " years old." . PHP_EOL;
}