<?php

namespace BookShop;
class Book
{
    protected $title;
    protected $author;
    protected $price;


    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);

    }

    public function setTitle($title)//•	If the title’s length is less than 3 symbols – exception’s message is: "Title not valid!"
    {
        if (strlen($title) < 3) {
            throw  new \Exception('Title not valid!');
        }
        $this->title = $title;
    }

    public function setAuthor($author)
    {
        $authorArr = explode(" ", $author);
        $secondName = $authorArr[1];
        if (is_numeric(substr($secondName, 0, 1))) {
            throw  new \Exception('Author not valid!');
        }
        $this->author = $author;
    }//•	If the author’s second name is starting with a digit– exception’s message is: "Author not valid!"

    public function setPrice($price)
    {
        if ($price <= 0) {
            throw  new \Exception('Price not valid!');
        }
        $this->price = $price;
    }//•	If the price is zero or it is negative – exception’s message is: "Price not valid!"


    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function __toString()
    {
        //return "Author :{$this->getAuthor()} ,Book title :{$this->getTitle()} ,Price: {$this->getPrice()}";
        if (isset($this->author) && $this->title && $this->price) {


            return 'OK' . PHP_EOL . $this->getPrice();
        }
    }

}