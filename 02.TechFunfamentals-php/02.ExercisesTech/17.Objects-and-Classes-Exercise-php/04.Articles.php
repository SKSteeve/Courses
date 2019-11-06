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
    public function setContent($content): void
    {
        $this->content = $content;
    }
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function __toString()
    {
        return $this->title . ' - ' . $this->content . ': ' . $this->author;
    }
}

$article = explode(', ', readline());
$myArticleObj = new Article($article[0], $article[1], $article[2]);
$to = (int)readline();

for($i = 0; $i < $to; $i++)
{
    $command = explode(': ', readline());

    switch ($command[0])
    {
        case 'Edit':
            $myArticleObj->setContent($command[1]);
            break;
        case 'ChangeAuthor':
            $myArticleObj->setAuthor($command[1]);
            break;
        case 'Rename':
            $myArticleObj->setTitle($command[1]);
            break;
    }
}

echo  $myArticleObj;
