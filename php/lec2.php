<?php
// session_start();
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo $_SESSION["username"];
// echo $_SESSION["password"];
// indexed array
// $number = [1,'satyedadsdas',true,4];

// associative array
// $number = ['firstname' => 1,'secondname' => 2,'thirdname' => 34];
// $index = 2;
// $correctOrNot = 0;



// flow control   if conditions and switch case

// switch($index)
// {
//     case 3:  echo '3333333333333';
//         break;
//     case 2:  echo '222222222222';
//         break;
//     case 4:  echo '4444444444444';
//         break;
// }

// ternary operator

// if($index == 2 )
// {
//     echo "correct";
// }

// $index == 2 ? $correctOrNot=1 : $correctOrNot=0;

// echo $correctOrNot;

// var_dump($number);




// $number = [1,2,3,4,5];


// array_push($number,[6,7,8,9,0]);


// $number[]='sayed';
// $number[]='mahros';

// var_dump($number);
// echo '<br>';

// array_pop($number);


// var_dump($number);


// $number = ['firstname' => 1,'secondname' => 2,'thirdname' => 34];

// $number['thirdname'] = 'abanob';
// echo $number['thirdname'];





// loops 
// $i = 0;
// for( ; $i < 5; )
// {
//     echo 'sayed' . '<br>';
//     $i++;
// }


// $i = 0;

// while( $i != 10 )
// {
//     // enter the lucky number
//     echo 'try again';
//     $i++;
// }

// echo ' congratulation have entered the correct number';



// do{
//    $name =0;
//    $email ='';
//    $age =0;
// }while(false);


// $names= ['sayed','dr.abdo','ahmed','yasmin','mahros'];
// $names= ['firstname' => 'sayed'
//         ,'secondname' =>'dr.abdo'
//         ,'thirdname' =>'ahmed'
//         ,'fourthname' =>'yasmin'
//         ,'fifthname' =>'mahros'];
// // for($i=0 ; $i < count($names) ;$i++ )
// // {
// //     echo $names[$i].'<br>';
// // }

// $studentname=[];
// foreach($names as $key => $value)
// {
//     $studentname[] = $value;
// }

// var_dump($studentname);


// functions 
 

// function calculatore($ob, $var1)
// {
//     $result=0;
//     switch($ob)
//     {
//         case '+':  
//             foreach($var1 as $val)
//             {
//                 $result += $val;
//             }
//             return $result;
//             break;
//         case '-':
//             foreach($var1 as $val)
//             {
//                 $result-=$val;
//             }
//             return $result;
//             break;
//     }
// }
// printnames('hello', 'mahros');


//  $result =  calculatore('+' ,[2,3,4,5]);

//  echo $result;


// $password = '12345678';
// $num[1]=explode('.',$num[1]);
// $num[0]= explode('',$num[0]);
// $num[0]= str_split($num[0] , 1);

// $num = [1,2,3,5];
// $num = array(1,2,3,5);
// $num = explode('@',$num);
// $num = implode('@',$num);
// $num =  trim($num);
// $arr = ['name' => 'sayed', 'age' => 25, 'email'=> 'sayed@gmail.com'];
// $arr = [1,2,3,4];
// $arr['sa'] = 'adssad';
// var_dump(array_values($arr));
// var_dump($arr);
// $name = 'sayed';
// $id = 500;

// local global (   scoping   -      lifetime)
// local global static const 
// function printmynames()
// {
//     static $counter = 0;
//     $counter ++ ;
//     echo $counter;
// }
// printnames(); 
// printnames('mohamed'); 
// printnames('ahmed'); 
 
// echo $name;


// constant variable

// define('PI','3.14', true);

// echo PI;




// super global variable

// cookies  
// $_COOKIE
// var_dump(time());


// setcookie('username','sayed' , time() + (60 * 60 *60));
// setcookie('password','12345678');



// session





// $username = 'sayed';

// $password = '12345678';

// $_SESSION["username"]= "mahros";
// $_SESSION["password"]= "12345678";






// isset
// $name = null;
// echo empty($name);

// if(! empty($name))
// {
//     echo 'welcome';
// }
// else{
//     echo 'please log in';
// }


// empty



// unset


// $name = 'sayed';
// $names = ['sayed', 'mohamed', 'ahmed','sohila', 'dr.abdo','yasmin','ahmed','shams']; 

// unset($names[1], $names[3], $names[5]);

// var_dump($names) ;


