<?php

require('../../php/db.php');
$users = new DB('localhost','ecommerce','root','');

$allusers =  $users->delete('users',$_REQUEST['id']);





?>