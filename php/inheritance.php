<?php
// require  require_once include  include_once
include_once('Employer.php');

class Marketing extends Employer {
    // private
    private $encrypted_password; 
    public $best_marketing_campain;
    static public $country = 'canada';

    function __construct($name,$department,$phone,$salary,$best_marketing_campain)
    {
        parent::__construct($name,$department,$phone,$salary);
        $this->best_marketing_campain = $best_marketing_campain;
    }

    // function setBest($code){
    //     $this->best_marketing_campain = $code;
    // }
    /*** polymorfizme  overloading overriding  ******** */
    function setName($name){
        parent::setName('#'.$name);
    }
    // function getBest(){
    //    return $this->best_marketing_campain;
    // }
    static function printName(){
       return 'sayed';
    }
   
}
// Marketing::$country = 'egypt';
// $mycountry = Marketing::$country; 



$mark1= new Marketing('sayed','it','1213123',2000,'2209');
// $mark1->setName('mahros');
// polymorphism (overloading , overriding)

$mark1->setName('mohamed');

/**
 *  class structure   
 *  object instence
 * 
 *  __constructor
 * 
 * 
 * 
 * 
 * 
 * 
 * ***** */





?>