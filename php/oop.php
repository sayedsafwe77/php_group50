<?php
    class user {
        // access modifier  
        //  private , public , protected  
       private $name;
       private $email;
       public $phone;
       public $type;
       public $address;
       public $image;
       private $is_valid_name;
       function __construct($username,$useremail, $userphone, $usertype, $useraddress, $userimage)
       {
        //    var_dump($name,$email, $phone, $type, $address, $image);
            $this->name = $username;
            $this->email = $useremail;
            $this->phone = $userphone;
            $this->type = $usertype;
            $this->address = $useraddress;
            $this->image = $userimage;

       }
       function getName(){
        return $this->name;
       }
       function getEmail(){
        return $this->email;
       }
  
       function __set($name, $email)
       {
           $this->name=$name;
           $this->email=$email;
       }
    }
    $std=new User('mahmoud','mahmoud@gmail.com','02131231','user','asdasd','mahmoud.jpg');
    $std->__set('nada','nada@gmail.com');





































































       // $std2=new User('ahmed','ahmed@gmail.com','02131231','user','asdasd','ahmed.jpg');
    // $std3=new User('mohamed','mohamed@gmail.com','02131231','user','asdasd','mohamed.jpg');
    // $std4=new User('manar','manar@gmail.com','02131231','user','asdasd','manar.jpg');
    // $std5=new User('may','may@gmail.com','02131231','user','asdasd','may.jpg');


?>