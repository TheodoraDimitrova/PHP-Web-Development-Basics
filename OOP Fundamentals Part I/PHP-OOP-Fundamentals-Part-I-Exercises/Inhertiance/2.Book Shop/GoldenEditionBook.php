<?php
namespace BookShop;
class GoldenEditionBook extends Book {
//GoldenEditionBook - represents a special book holds the same properties as any Book, but its price is always 30% higher.



    public function __construct($title,$author,$price)
    {
        parent::__construct($title,$author,$price);
    }

    public function getPrice()
   {
       return parent::getPrice()*1.3;
   }


}