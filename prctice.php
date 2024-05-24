<?php
class  Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function indroduce(){
        return "My name is".$this->name."my age is ".$this->age;
    }
}