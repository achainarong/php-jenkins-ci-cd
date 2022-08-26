<?php

class TestObject
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function set_firstname($name)
    {
        $this->name = $name;
    }

    public function set_lastname($description)
    {
        $this->description = $description;
    }
}
