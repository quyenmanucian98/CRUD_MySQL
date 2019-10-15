<?php


class Student
{
    public $id;
    public $name;
    public $class;

    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }
}