<?php

/**
 *  oop main concepts:
 *  - inheritance
 *  - overloading
 *  - overriding
 *  - abstraction
 * 
 * ************** */


// overloading 
// protected
// abstraction  ( class - function)
// final        ( class - function)
// interfaces  
// traits
// namespace

trait adult{
    function __construct(){
        echo 'welcome from trait';
    }
    static function printStaticName(){
        echo 'sayed';
    }
    function printDynamicName($name){
        echo $name;
    }
    static function returnStaticName(){
        return 'sayed';
    }
    function returnDynamicName($name){
        return $name;
    }
}


class Human{
    /******
     * visible for functions at the same class
     * visible outside the class ( visiable globally )
     * visible for functions at the same class and for child classes
     * **************** */

    /**** access modifiers public protected private   ******** */
    public $hair_color;
    public $name;
    protected $eye_color;
    protected $height;
    function __construct($hair_color = 1 , $name = 1 , $eye_color = 1 , $height = 1)
    {
        var_dump('parent');
        $this->hair_color = $hair_color;

        $this->name = $name;

        $this->eye_color = $eye_color;

        $this->height = $height;
    }

    function setName($name){
        $this->name = $name;
    }

}
class Boys extends Human{
    function __construct(){
        parent::__construct();
        var_dump('child');
    }
    function setName($name){
        var_dump($name);
    }
}

class girls extends Human{
    use adult;

    function __construct(){
        echo 'welcome from girls';
    }
    function setName($name){
        $this->name = '$'.$name;
    }
}
// $joe = new Human(3,3,3,3);
$boy = new girls();
$boy->printDynamicName('yasmin');

// girls::printStaticName();
// var_dump($boy->height);






?>