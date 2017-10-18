<?php


namespace LastDigitName;


class Number
{
 private $number;


    public function __construct(string $number)
    {
        $this->number = $number;

    }
    public function getNumber(): int
    {
        return $this->number;
    }
    public function EnglishNameOfDigit():string {
        $arr=str_split($this->number);
        $lastDigit=$arr[count($arr)-1];
        switch ($lastDigit) {
            case 0:
                return "zero";
            case 1:
                return "one";
            case 2:
                return "two";
            case 3:
                return "three";
            case 4:
                return "four";
            case 5:
                return "five";
            case 6:
                return "six";
            case 7:
                return "seven";
            case 8:
                return "eight";
            case 9:
                return "nine";
            default:
                throw new Exception("Invalid input");
        }

    }


}