<?php

class Children
{
    private $childName;
    private $childBirthday;

    public function __construct( string $childName,  string $childBirthday)
    {
        $this->childName = $childName;
        $this->childBirthday = $childBirthday;
    }

    function __toString()
    {
        return "{$this->childName} {$this->childBirthday}";
    }


}
