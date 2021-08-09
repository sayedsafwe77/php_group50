<?php
require('../../php/db.php');
$users = new DB('localhost','ecommerce','root','');

$allusers =  $users->index('users','id','username','email','image');


foreach($allusers as $key => $value)
{
    echo "
                <tr>
                    <th scope='row'>".$value['id']."</th>
                    <td contentEditable='true' id='username'>".$value['username']."</td>
                    <td contentEditable='true' id='email'>".$value['email']."</td>
                    <td contentEditable='true' id='image'>".$value['image']."</td>
                    <td>
                    <form>
                        <i class='fas fa-edit'></i>
                        <i class='fas fa-trash'></i>
                    </td>
                </tr>
    ";
    
}
// print_r($allusers);


?>