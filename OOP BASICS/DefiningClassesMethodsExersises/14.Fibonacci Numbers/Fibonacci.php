<?php

class Fibonacci
{


    private $fibonacciSequence = [0,1];

    public function __construct($end)
    {
        $this->generateFibonacciSequence($end);
    }



    public function getNumbersInRange(int $start, int $end)
    {
        return array_slice($this->fibonacciSequence, $start, $end);
    }
    private function generateFibonacciSequence(int $end)
    {
        for ($i = 2; $i < $end; $i++) {
            $a = $this->fibonacciSequence[$i - 2];
            $b = $this->fibonacciSequence[$i - 1];
            $this->fibonacciSequence[] = $a + $b;
        }
    }
}