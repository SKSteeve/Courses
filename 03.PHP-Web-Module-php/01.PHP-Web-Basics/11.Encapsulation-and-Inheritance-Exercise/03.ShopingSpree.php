<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $money;

    /**
     * @var Product[]
     */
    private $bagOfProducts;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bagOfProducts = [];
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if(empty($name)) {
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    private function setMoney(float $money): void
    {
        if($money < 0) {
            throw new Exception("Money cannot be negative");
        }

        $this->money = $money;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param Product $product
     */
    private function addProduct(Product $product): void
    {
        $this->bagOfProducts[] = $product;
    }

    /**
     * @return array
     */
    public function getBagOfProducts(): array
    {
        return $this->bagOfProducts;
    }

    /**
     * @param Product $product
     * @throws Exception
     */
    public function buy(Product $product)
    {
        if($this->getMoney() >= $product->getCost()) {
            $result = $this->getMoney() - $product->getCost();
            $this->setMoney($result);
            $this->addProduct($product);
            echo "{$this->getName()} bought {$product->getName()}\n";
        } else {
            throw new Exception("{$this->getName()} can't afford {$product->getName()}\n");
        }
    }
}

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     * @throws Exception
     */
    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
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
    private function setName(string $name): void
    {
        if(empty($name)) {
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    private function setCost(float $cost): void
    {
        $this->cost = $cost;
    }


}

$personsData = preg_split("/[=;]/", readline(), -1);
$personsData = array_filter($personsData, function (string $el) {
    return $el !== '';
});

$people = [];
for($i = 0; $i < count($personsData) - 1; $i+=2) {
    $personName = $personsData[$i];
    $personMoney = $personsData[$i + 1];

    try {
        $people[$personName] = new Person($personName, $personMoney);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
}


$productsData = preg_split("/[=;]/", readline(), -1);
$personsData = array_filter($personsData, function (string $el) {
    return $el !== '';
});

$products = [];
for($i = 0; $i < count($productsData) - 1; $i+=2) {
    $productName = $productsData[$i];
    $productCost = $productsData[$i+1];

    $products[$productName] = new Product($productName, $productCost);
}

$input = readline();
while($input !== 'END') {

    $data = explode(' ', $input);
    list($personName, $productName) = $data;

    if(array_key_exists($personName, $people) && array_key_exists($productName, $products)) {
        try {
            /** @var Person $person */
            $person = $people[$personName];
            $person->buy($products[$productName]);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    $input = readline();
}

/** @var Person $person $person */
foreach ($people as $person) {
    echo "{$person->getName()} - ";
    if(count($person->getBagOfProducts()) == 0) {
        echo $person->getName() . "Nothing bought\n";
        continue;
    }

    $prodNames = '';
    /** @var Product $product $product */
    foreach ($person->getBagOfProducts() as $product) {
        $prodNames .= $product->getName() . ',';
    }

    echo substr($prodNames, 0, strrpos($prodNames, ','));
    echo PHP_EOL;
}