<?php

namespace Box;


class Box
{//length, width and height.
    private $length;
    private $width;
    private $height;

    public function __construct(float $length,float $width,float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        if ($length <= 0) {
            throw new \Exception('Length cannot be zero or negative. ');

        }
        $this->length = $length;
    }

    public function setWidth($width)
    {
        if ($width <= 0) {
            throw new \Error('Width cannot be zero or negative. ');
        }
         $this->width = $width;
    }

    public function setHeight($height)
    {
        if($height<=0){
            throw new \Exception('Height cannot be zero or negative. ');
        }
        $this->height = $height;
    }


//surface area, lateral surface area and its volume
//Volume = lwh
//Lateral Surface Area = 2lh + 2wh
//Surface Area = 2lw + 2lh + 2wh
    public function Volume()
    {

        return number_format($this->length * $this->width * $this->height, 2);
    }

    public function LateralSurface()
    {

        return number_format((2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2);
    }

    public function SurfaceArea()
    {
        echo '';
        return number_format((2 * $this->length * $this->width) + (2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2);
    }

    public function __toString()
    {
        return 'Volume - ' . $this->Volume() . PHP_EOL .
            'Lateral Surface Area - ' . $this->LateralSurface() . PHP_EOL .
            'Surface Area - ' . $this->SurfaceArea() . PHP_EOL;
    }

}