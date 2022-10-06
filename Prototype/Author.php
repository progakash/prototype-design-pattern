<?php
namespace ProtoTypeDesignPattern;

class Author
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}