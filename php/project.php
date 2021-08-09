<?php

//  crud operation
// create read update delete 

include('db.php');

$data = new DB('localhost','ecommerceee','root','');
// $rows = $data->index('products','product_name','quantity');
// $rows = $data->select('products',["price" => 300],'product_name','quantity','price');
// $rows = $data->create('products',["product_name","price","image"],["new product",'100','new.png']);
// $rows = $data->update('products',["product_name" => "updated","image" =>'updated.png'],['id' => 5]);
$rows = $data->delete('products',3);

var_dump($rows);
?>