<?php

class DecimalNumber
{
    /**
     * @var string
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function reversedNum(): void
    {
        for ($i = strlen($this->value) - 1; $i >= 0; $i--)
        {
            echo $this->value[$i];
        }
        echo PHP_EOL;
    }
}

$num = new DecimalNumber(readline());
$num->reversedNum();
