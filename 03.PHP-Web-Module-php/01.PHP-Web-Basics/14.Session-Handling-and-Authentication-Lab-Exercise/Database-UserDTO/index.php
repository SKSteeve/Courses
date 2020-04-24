<?php

use Database\PDODatabase;

spl_autoload_register();

class UserDTO
{
    private $name;
    private $age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    private function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    private function setAge($age): void
    {
        $this->age = $age;
    }
}

$pdo = new PDO("mysql:host=localhost:3306;dbname=session_test", "root", "");

$db = new PDODatabase($pdo);
$statement = $db->query("SELECT * FROM `users`");
$result = $statement->execute();
$allUsers = $result->fetch(UserDTO::class);

/** @var UserDTO $user */
foreach ($allUsers as $user) {
    echo $user->getName() . ' ' . $user->getAge() . PHP_EOL;
}

