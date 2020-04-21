<?php


class Vegetable extends Food
{
    /**
     * Vegetable constructor.
     * @param int $quantity
     */
    public function __construct(int $quantity)
    {
        parent::__construct($quantity);
    }

    /**
     * @return string
     * @throws ReflectionException
     */
    public function getClassName(): string
    {
        $func = new \ReflectionClass($this);
        return $func->getName();
    }
}