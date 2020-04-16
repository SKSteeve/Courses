<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var object Company
     */
    private $company;

    /**
     * @var object Car
     */
    private $car;

    private $parents = [];

    private $children = [];

    private $pokemons = [];

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company): void
    {
        $this->company = $company;
    }

    public function getCar(): object
    {
        return $this->car;
    }

    public function setCar(object $car): void
    {
        $this->car = $car;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function setParents($parents): void
    {
        $this->parents[] = $parents;
    }

    public function getChildren()
    {
        return $this->children;
    }


    public function setChildren($children): void
    {
        $this->children[] = $children;
    }

    public function getPokemons()
    {
        return $this->pokemons;
    }

    public function setPokemons($pokemon): void
    {
        $this->pokemons[] = $pokemon;
    }

}

class Company
{
    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $department;

    /**
     * @var float
     */
    private $salary;

    /**
     * Company constructor.
     * @param string $companyName
     * @param string $department
     * @param float $salary
     */
    public function __construct(string $companyName, string $department, float $salary)
    {
        $this->setCompanyName($companyName);
        $this->setDepartment($department);
        $this->setSalary($salary);
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
}

class Car
{
    /**
     * @var string
     */
    private $carModel;

    /**
     * @var integer
     */
    private $carSpeed;

    /**
     * Car constructor.
     * @param string $carModel
     * @param int $carSpeed
     */
    public function __construct(string $carModel, int $carSpeed)
    {
        $this->setCarModel($carModel);
        $this->setCarSpeed($carSpeed);
    }


    /**
     * @return string
     */
    public function getCarModel(): string
    {
        return $this->carModel;
    }

    /**
     * @param string $carModel
     */
    public function setCarModel(string $carModel): void
    {
        $this->carModel = $carModel;
    }

    /**
     * @return int
     */
    public function getCarSpeed(): int
    {
        return $this->carSpeed;
    }

    /**
     * @param int $carSpeed
     */
    public function setCarSpeed(int $carSpeed): void
    {
        $this->carSpeed = $carSpeed;
    }
}

class Parents
{
    /**
     * @var string
     */
    private $parantName;

    /**
     * @var string
     */
    private $parentBirthday;

    /**
     * Parents constructor.
     * @param string $parantName
     * @param string $parentBirthday
     */
    public function __construct(string $parantName, string $parentBirthday)
    {
        $this->setParantName($parantName);
        $this->setParentBirthday($parentBirthday);
    }

    /**
     * @return string
     */
    public function getParentName(): string
    {
        return $this->parantName;
    }

    /**
     * @param string $parantName
     */
    public function setParantName(string $parantName): void
    {
        $this->parantName = $parantName;
    }

    /**
     * @return string
     */
    public function getParentBirthday(): string
    {
        return $this->parentBirthday;
    }

    /**
     * @param string $parentBirthday
     */
    public function setParentBirthday(string $parentBirthday): void
    {
        $this->parentBirthday = $parentBirthday;
    }
}

class Children
{
    /**
     * @var string
     */
    private $childName;

    /**
     * @var string
     */
    private $childBirthday;

    /**
     * Children constructor.
     * @param string $childName
     * @param string $childBirthday
     */
    public function __construct(string $childName, string $childBirthday)
    {
        $this->setChildName($childName);
        $this->setChildBirthday($childBirthday);
    }

    /**
     * @return string
     */
    public function getChildName(): string
    {
        return $this->childName;
    }

    /**
     * @param string $childName
     */
    public function setChildName(string $childName): void
    {
        $this->childName = $childName;
    }

    /**
     * @return string
     */
    public function getChildBirthday(): string
    {
        return $this->childBirthday;
    }

    /**
     * @param string $childBirthday
     */
    public function setChildBirthday(string $childBirthday): void
    {
        $this->childBirthday = $childBirthday;
    }
}

class Pokemon
{
    /**
     * @var string
     */
    private $pokemonName;

    /**
     * @var string
     */
    private $pokemonType;

    /**
     * Pokemon constructor.
     * @param string $pokemonName
     * @param string $pokemonType
     */
    public function __construct(string $pokemonName, string $pokemonType)
    {
        $this->setPokemonName($pokemonName);
        $this->setPokemonType($pokemonType);
    }

    /**
     * @return string
     */
    public function getPokemonName(): string
    {
        return $this->pokemonName;
    }

    /**
     * @param string $pokemonName
     */
    public function setPokemonName(string $pokemonName): void
    {
        $this->pokemonName = $pokemonName;
    }

    /**
     * @return string
     */
    public function getPokemonType(): string
    {
        return $this->pokemonType;
    }

    /**
     * @param string $pokemonType
     */
    public function setPokemonType(string $pokemonType): void
    {
        $this->pokemonType = $pokemonType;
    }
}

$people = [];

$line = readline();
while($line != 'End') {

    $info = explode(' ', $line);

    switch ($info[1]) {
        case 'company':
            list($p, $c, $cName, $department, $salary) = $info;
            $company = new Company($cName, $department, $salary);

            $falseOrPositionInArr = checkIfInArrayOfObjects($p, $people);
            if($falseOrPositionInArr >= 0 && isset($people[$falseOrPositionInArr])) {
                $people[$falseOrPositionInArr]->setCompany($company);
            }
            else {
                $person = new Person;
                $person->setName($p);
                $person->setCompany($company);
                $people[] = $person;
            }
            break;
        case 'car':
            list($p, $c, $carModel, $carSpeed) = $info;
            $car = new Car($carModel, $carSpeed);

            $falseOrPositionInArr = checkIfInArrayOfObjects($p, $people);
            if($falseOrPositionInArr >= 0 && isset($people[$falseOrPositionInArr])) {
                $people[$falseOrPositionInArr]->setCar($car);
            }
            else {
                $person = new Person;
                $person->setName($p);
                $person->setCar($car);
                $people[] = $person;
            }
            break;
        case 'pokemon':
            list($p, $c, $pName, $pType) = $info;
            $pokemon = new Pokemon($pName, $pType);

            $falseOrPositionInArr = checkIfInArrayOfObjects($p, $people);
            if($falseOrPositionInArr >= 0 && isset($people[$falseOrPositionInArr])) {
                $people[$falseOrPositionInArr]->setPokemons($pokemon);
            }
            else {
                $person = new Person;
                $person->setName($p);
                $person->setPokemons($pokemon);
                $people[] = $person;
            }
            break;
        case 'parents':
            list($p, $c, $parName, $parBirthday) = $info;
            $parents = new Parents($parName, $parBirthday);

            $falseOrPositionInArr = checkIfInArrayOfObjects($p, $people);
            if($falseOrPositionInArr >= 0 && isset($people[$falseOrPositionInArr])) {
                $people[$falseOrPositionInArr]->setParents($parents);
            }
            else {
                $person = new Person;
                $person->setName($p);
                $person->setParents($parents);
                $people[] = $person;
            }
            break;
        case 'children':
            list($p, $c, $childName, $childBirthday) = $info;
            $children = new Children($childName, $childBirthday);

            $falseOrPositionInArr = checkIfInArrayOfObjects($p, $people);
            if($falseOrPositionInArr >= 0 && isset($people[$falseOrPositionInArr])) {
                $people[$falseOrPositionInArr]->setChildren($children);
            }
            else {
                $person = new Person;
                $person->setName($p);
                $person->setChildren($children);
                $people[] = $person;
            }
            break;
    }

    $line = readline();
}

$name = readline();

/**
 * @var Person $people
 */
foreach ($people as $person)
{
    if($person->getName() == $name) {
        echo $person->getName() . PHP_EOL;
        echo "Company:" . PHP_EOL;
        if($person->getCompany() !== null) {
            echo "{$person->getCompany()->getCompanyName()} {$person->getCompany()->getDepartment()} {$person->getCompany()->getSalary()}" . PHP_EOL;
        }

        echo "Car:" . PHP_EOL;
        if($person->getCar() !== null) {
            echo "{$person->getCar()->getCarModel()} {$person->getCar()->getCarSpeed()}" . PHP_EOL;
        }

        echo "Pokemon:" . PHP_EOL;
        if($person->getPokemons() !== null) {
            foreach ($person->getPokemons() as $pokemon) {
                echo "{$pokemon->getPokemonName()} {$pokemon->getPokemonType()}" . PHP_EOL;
            }
        }

        echo "Parents:" . PHP_EOL;
        if($person->getParents() !== null) {
            foreach ($person->getParents() as $parent) {
                echo "{$parent->getParentName()} {$parent->getParentBirthday()}" . PHP_EOL;
            }
        }

        echo "Children:" . PHP_EOL;
        if($person->getChildren() !== null) {
            foreach ($person->getChildren() as $child) {
                echo "{$child->getChildName()} {$child->getChildBirthday()}" . PHP_EOL;
            }
        }
        return;
    }
}





function checkIfInArrayOfObjects(string $name, array $arr) {

    foreach ($arr as $key => $person) {
        if($person->getName() == $name) {
            return $key;
        }
    }
    return -1;
}