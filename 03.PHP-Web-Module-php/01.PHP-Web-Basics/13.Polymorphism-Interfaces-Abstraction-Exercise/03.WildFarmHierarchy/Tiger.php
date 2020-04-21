<?php


class Tiger extends Felime
{
    /**
     * Tiger constructor.
     * @param string $name
     * @param string $type
     * @param float $weight
     * @param string $livingRegion
     */
    public function __construct(string $name, string $type, float $weight, string $livingRegion)
    {
        parent::__construct($name, $type, $weight, $livingRegion);
    }

    public function makeSound(): void
    {
        echo "ROAAR!!!" . PHP_EOL;
    }

    /**
     * @param Food $food
     * @throws ReflectionException
     */
    public function eat(Food $food): void
    {
        $func = new \ReflectionClass($food);
        $foodClassName = $func->getName();

        $class = new \ReflectionClass($this);
        $className = $class->getName();

        if("Meat" !== $food->getClassName()) {
            throw new Exception($className. "s are not eating that type of food!\n");
        }
        $this->setFoodEaten($food->getQuantity());
    }
}