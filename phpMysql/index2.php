<?php
// crud 
// create read (retreve) update delete
$db='mysql:host=localhost;dbname=ecommerce';
$con=new PDO($db,'root','');
// insert data 
// $query=" insert into users (`username`,`email`, `password` ,`image`, `gender`) 
//                     values('esraa','esraa@gmail.com','5678','esraa.jpg','F')";
    
// $sql = $con->prepare($query);
// $res = $sql->execute();

// var_dump($res);


// read data
$query="select * from users where gender='F' ";

$sql = $con->prepare($query);
$res = $sql->execute();
$rows = $sql->fetchAll();

var_dump($rows);





// update data
// delete data

?>