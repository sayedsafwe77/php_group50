<?php


require('../../php/db.php');
$users = new DB('localhost','ecommerce','root','');

$allusers =  $users->update('users',[$_REQUEST['column'] => $_REQUEST['value'] ],['id' => $_REQUEST['id']]);


// echo $_REQUEST['column'],$_REQUEST['id'];






?>