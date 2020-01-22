<?php

class Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;
    /**
     * @var string
     */
    private $occupation;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     * @param string $occupation
     */
    public function __construct(
        string $name,
        int $age,
        string $occupation)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setOccupation($occupation);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    private function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }

    public function __toString()
    {
        return "{$this->getName()} - age: {$this->getAge()}, occupation: {$this->getOccupation()}";
    }
}

$people = [];

$input = readline();
while($input != "END")
{
    list($name, $age, $occupation) = explode(' ', $input);
    $age = intval($age);

    $person = new Person($name, $age, $occupation);
    $people[] = $person;

    $input = readline();
}

usort($people, function (Person $person1, Person $person2){
    return $person1->getAge() <=> $person2->getAge();
});

/** @var Person $person */
foreach ($people as $person)
{
    echo $person . PHP_EOL;
}