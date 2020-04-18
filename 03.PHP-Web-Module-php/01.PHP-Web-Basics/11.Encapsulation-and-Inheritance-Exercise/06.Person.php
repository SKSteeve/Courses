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
    protected $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     * @throws Exception
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
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
     * @throws Exception
     */
    protected function setName(string $name): void
    {
        if(strlen($name) < 3){
            throw new Exception("Name's length should not be less then 3 symbols!");
        }
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
     * @throws Exception
     */
    protected function setAge(int $age): void
    {
        if($age < 1) {
            throw new Exception("Age must be positive!");
        }
        $this->age = $age;
    }
}

class Child extends Person
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }

    protected function setAge(int $age): void
    {
        if($age > 15) {
            throw new Exception("Child's age must be less then 16!");
        }
        $this->age = $age;
    }
}

try {
    $person = new Person('gosho', 0);
    print_r($person);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
