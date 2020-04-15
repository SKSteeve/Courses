<?php

class Person
{
    private $name;
    private $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->name ." - ". $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

$numberOfInputs = trim(fgets(STDIN));


$persons = [];
while ($numberOfInputs > 0){
    $input = trim(fgets(STDIN));
    $input = explode(' ', $input);

    $name = $input[0];
    $age = intval($input[1]);
    $check = checkAge($age);


    if ($check) {

        $persons [] = new Person($name, $age);
    }

    $numberOfInputs--;
}

function checkAge ($age){
    return $age > 30;
}

usort($persons, function (Person $a,Person $b)
{
    return strcmp($a->getName(), $b->getName());
});

foreach ($persons as $person)
{
    echo $person. PHP_EOL;
}