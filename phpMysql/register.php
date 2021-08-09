<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
// $profilepic=$_FILES['profilepic'];

// $imagePath=$_FILES['profilepic']['tmp_name'];
// $imageName = $_FILES['profilepic']['name'];
// $imageExe = explode('.',$imageName);
// $ext = ['jpg','png','jpeg'];
$validationTrue=1;
// // var_dump($imageExe[1]);
// if(!in_array($imageExe[1],$ext))
// {
//     $validationTrue=0;
//     $message = 'file extension is not supported the supported extensions is jpg ,jpeg ,png';

//     // echo 'file extension is not supported the supported extensions is jpg ,jpeg ,png'.'<br>';   
// }
// if($profilepic['size']/1000000 > 1)
// {
//     $validationTrue=0;
//     $message = 'file size is too long the acceptable size is 1M';

//     // echo 'file size is too long the acceptable size is 1M'.'<br>';   
// }
/* start validation */ 

//  username is a not empty 

if(empty($username))
{
    $validationTrue=0;
    $message = 'username is required';

    // echo 'username is required'.'<br>';
}
//  password is a not empty 

if(empty($password))
{
    $validationTrue=0;
    $message = 'password is required';

    // echo 'password is required'.'<br>';
}
//  email is a not empty 
if(empty($email))
{
    $validationTrue=0;
    $message = 'email is required';

    // echo 'email is required'.'<br>';
}
//  gender is a not empty 
if(empty($gender))
{
    $validationTrue=0;
    $message = 'gender is required';

    // echo 'gender is required'.'<br>';
}
//  email is a valid email
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $validationTrue=0;
    $message = 'email must be valid email';

    // echo 'email must be valid email'.'<br>';
}








/* end validation */ 
if($validationTrue)
{

    $db='mysql:host=localhost;dbname=ecommerce';
    $con = new PDO($db,'root','');
    $query="select * from users where email = '".$email."'";
    
    $sql = $con->prepare($query);
    $res = $sql->execute();
    $rows= $sql->fetchAll();
    
    if(count($rows)){
        echo 'there is already account with this email'.'<br>';
    }
    
    // move_uploaded_file($imagePath,'images/'.$imageName);

    $query="insert into users (`username`,`email`, `password` ,`image`, `gender`) values(?,?,?,?,?)";
    $sql = $con->prepare($query);
    $res = $sql->execute([$username,$email,sha1($password),'img.png',$gender]);  

    $message = 'user created succeffully';
}
// setcookie('message',$message,time() + (8600),'/');
// header("Location:https://localhost/phpMysql/register2.php");

echo  $message ;

// var_dump($res);


?>