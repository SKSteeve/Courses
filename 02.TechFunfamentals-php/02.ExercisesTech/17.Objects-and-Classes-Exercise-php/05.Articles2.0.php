<?php


class Article
{
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function __toString()
    {
        return $this->title . ' - ' . $this->content . ': ' . $this->author;
    }
}

$articles = [];
$articleCount = intval(readline());
for($i = 0; $i < $articleCount; $i++)
{
    $input = readline();
    $tokens = explode(', ', $input);
    $title = $tokens[0];
    $content = $tokens[1];
    $author = $tokens[2];
    $article = new Article($title, $content, $author);
    $articles[] = $article;
}
$criteria = readline();

usort($articles, function (Article $ar1, Article $ar2)
use ($articles, $criteria) {
    if($criteria == "title") {
        return $ar1->getTitle() <=> $ar2->getTitle();
    }
    else if($criteria == "content") {
        return $ar1->getContent() <=> $ar2->getContent();
    }
    else if($criteria == "author") {
        return $ar1->getAuthor() <=> $ar2->getAuthor();
    }
    else
    {
        return true;
    }
});

foreach ($articles as $article)
{
    echo $article . PHP_EOL;
}