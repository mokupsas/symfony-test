<?php

namespace App\Entity;

class Shared
{
    private $name = 'b';

    public function __construct()
    {
        $name = 'test value to see';
    }

    public function getName()
    {
        return $this->name;
    }
}