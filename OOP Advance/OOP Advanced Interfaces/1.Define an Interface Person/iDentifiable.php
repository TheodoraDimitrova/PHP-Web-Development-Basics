<?php

namespace Iperson;


interface iDentifiable
{
    public function setId(int $id);
    public function setIdBirtdate(int $Id, string $birthDate) ;
}