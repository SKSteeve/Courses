<?php

class Person
{
    public $name;
    public $age;
}

$person = new Person();
$person->name = "gosho";
$person->age = 23;

echo(count(get_object_vars($person)));