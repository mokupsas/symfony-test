<?php

namespace App\Entity;

class Shared
{
    private $name = 'b';

    public function __construct($name = 'default value')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}