<?php
// echo $_REQUEST['email'];
// echo $_REQUEST['password'];

// $emails = [PHP_EOL.'sayed@gmail.com'.PHP_EOL,
//            'mohamed@gmail.com'.PHP_EOL,
//            'ahmed@gmail.com'.PHP_EOL,
//            'mahmoud@gmail.com'.PHP_EOL,
//            'mahrous@gmail.com'.PHP_EOL,
//            'sohila@gmail.com'.PHP_EOL,
//            'abanob@gmail.com'.PHP_EOL];



// $users=[
//    ['email' => 'sayed@gmail.com',
//     'password' => '1234'
//    ],
//    ['email' => 'mohamed@gmail.com',
//     'password' => '1598'
//    ],
//    ['email' => 'ahmed@gmail.com',
//     'password' => '1470'
//    ],
//    ['email' => 'mahmoud@gmail.com',
//     'password' => '1643'
//    ],
//    ['email' => 'mahrous@gmail.com',
//     'password' => '9461'
//    ],
//    ['email' => 'sohila@gmail.com',
//     'password' => '8379'
//    ],
//    ['email' => 'abanob@gmail.com',
//     'password' => '1648'
//    ],
// ];
// $email = $_REQUEST['email'];
// $password = $_REQUEST['password'];
// $found=0;

// $result = filter_var($email , FILTER_VALIDATE_EMAIL);

// if($result)
// {
//     foreach($users as $value)
//     {
//         if($email == $value['email'] && $password == $value['password'])
//         {
//             $found = 1;
//         }
//     }
//     if($found == 1 )
//     {
//         echo 'logged in';
//     }
//     else{
//         echo 'incorrect email or password';
//     }
// }
// else{
//     echo 'invalide email';
// }

// file size validation
// extention validation

// write to file
// fopen
// file_put_contents()

// fopen
// fread($myfile,filesize("webdictionary.txt"))
// fclose($myfile);



// $path = $_FILES['profilepic']['tmp_name'];
// $name = $_FILES['profilepic']['name'];


// move_uploaded_file($path, 'images/'.$name);

// $filename = 'names.txt';
// $file = fopen($filename , 'w');
// $text = fread($file , filesize($filename));
// $text = fgets($file);
// $text2 = fgets($file);
// fclose($file);
// $arr=[];
// $file = fopen($filename , 'a');
// $i=0;
// while(!feof($file))
// {
//     $arr[]=fgets($file);
//     echo $arr[$i].'<br>';

//     $i++;

// }

// var_dump($arr);




// fwrite($file ,PHP_EOL.'sayed@gmail.com');

// file_put_contents($filename, $emails, FILE_APPEND);


var_dump(date("h:i:sa"));







































// move_uploaded_file()
























?>