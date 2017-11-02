<?php
use BookShop\Book;
use BookShop\GoldenEditionBook;
include 'Book.php';
include "GoldenEditionBook.php";
$name=trim(fgets(STDIN));
$title=trim(fgets(STDIN));
$standardPrice=trim(fgets(STDIN));
$typeBook=trim(fgets(STDIN));

try{
    if($typeBook=='STANDARD' ){
        $book=new Book($title,$name,$standardPrice);
        echo $book;

    }elseif ($typeBook=='GOLD'){
        $book=new GoldenEditionBook($title,$name,$standardPrice);
        echo $book;
    }else{
        throw new Exception('Type is not valid!');
    }









}catch (Exception $e){
    echo 'Caught exception: ', $e->getMessage(), "\n";
}