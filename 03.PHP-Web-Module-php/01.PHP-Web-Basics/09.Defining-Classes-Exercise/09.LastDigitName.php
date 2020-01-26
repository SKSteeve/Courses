<?php

class Number
{
    /**
     * @var int
     */
    private $number;

    public function __construct($number)
    {
        $this->setNumber($number);
    }

    /**
     * @param int $number
     */
    private function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): string
    {
        if($this->number % 10 == 1)
        {
            return "one";
        }
        else if($this->number % 10 == 2)
        {
            return "two";
        }
        else if($this->number % 10 == 3)
        {
            return "three";
        }
        else if($this->number % 10 == 4)
        {
            return "four";
        }
        else if($this->number % 10 == 5)
        {
            return "five";
        }
        else if($this->number % 10 == 6)
        {
            return "six";
        }
        else if($this->number % 10 == 7)
        {
            return "seven";
        }
        else if($this->number % 10 == 8)
        {
            return "eight";
        }
        else if($this->number % 10 == 9)
        {
            return "nine";
        }
        else if($this->number % 10 == 0)
        {
            return "zero";
        }
    }
}

$n = readline();
$newN = new Number($n);

echo $newN->getNumber();
