<?php

class Employer{
    public $name;
    public $department;
    public $phone;
    public $salary;
    function __construct($name,$department,$phone,$salary)
    {
        var_dump('parent');
        $this->name = $name;
        $this->department = $department;
        $this->phone = $phone;
        $this->salary = $salary;
    }
    function setName($name){
        $this->name = $name;
    }
}

?>