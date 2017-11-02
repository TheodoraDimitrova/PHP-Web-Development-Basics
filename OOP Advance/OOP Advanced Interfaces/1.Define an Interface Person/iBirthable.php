<?php
namespace Iperson;


interface iBirthable
{
    public  function  setBirthdate(string $b_day);
    public function setIdBirtdate(int $Id , string $birthDate );
}