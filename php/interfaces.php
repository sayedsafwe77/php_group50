<?php

// class Calculator{
//     public $model;
//     static  $number_of_wheels = 4;


//     function summation($num1,$num2)
//     {
//         $sum =$num1+$num2;
//         $this->printSummation($sum);
//     }
//     private function printSummation($sum){
//         echo $sum;
//     }

// }
// $car = new Calculator();
// $car->printSummation(1,9);







// abstract class Employers{
//     public $salary;
//     public $name;
//     abstract function setSalary();
//     abstract function setName($name);
// }
interface Employers{
    function setSalary();
    function setName($name);
}
class Marketing implements Employers{
    
    function setSalary()
    {

    }
    function setName($name)
    {
        
    }
    function printName(){

    }
}


class DB{
    // crud
    // insert create
    function create($table , $value)
    {

    }
    // read all data
    function getAll($table){
        
    } 
    // read single record
    function getRecord($table,$id){
        
    }
    // update single record
    function update($table , $value)
    {
        
    }
    // delete single record
    function destroy($table,$id){

    }

}

$db = new DB();
$db->create('users',['name' => 'sayed'])


// define('pi',3.14,true);
// const pi = 3.14;
// var_dump(pi);






?>