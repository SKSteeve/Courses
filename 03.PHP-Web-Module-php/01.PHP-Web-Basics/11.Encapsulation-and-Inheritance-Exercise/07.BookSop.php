<?php

class Book
{
    private $title;
    private $author;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $price
     * @throws Exception
     */
    public function __construct($author, $title, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     * @throws Exception
     */
    private function setTitle($title): void
    {
        if(strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author
     * @throws Exception
     */
    private function setAuthor($author): void
    {
        $names = explode(' ', $author);
        $secondName = $names[1];
        if(is_numeric($secondName[0])) {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     * @throws Exception
     */
    protected function setPrice($price): void
    {
        if($price <= 0) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }

    public function __toString()
    {
        return "OK" . PHP_EOL . $this->getPrice();
    }

}

class GoldenEditionBook extends Book
{

    public function __construct($title, $author, $price)
    {
        parent::__construct($title, $author, $price);
    }

    protected function setPrice($price): void
    {
        $price *= 1.30;
        parent::setPrice($price);
    }
}

$name = readline();
$title = readline();
$price = readline();
$type = readline();

if($type == 'STANDARD') {
    try {
        $book = new Book($name, $title, $price);
    } catch (Exception $ex) {
        echo $ex->getMessage();
        die();
    }
} else if($type == 'GOLD'){
    try {
        $book = new GoldenEditionBook($name, $title, $price);
    } catch (Exception $ex) {
        echo $ex->getMessage();
        die();
    }
} else {
    echo "Type is not valid!";
    return;
}

echo $book;