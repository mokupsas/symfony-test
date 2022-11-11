<?php
namespace App;

class Shared
{
    private $name;

    public function __construct()
    {
        $name = 'test value to see';
    }

    public function getName()
    {
        return $this->name;
    }
}