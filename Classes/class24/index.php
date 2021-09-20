<?php 

// $name = "John Doe";
// $age = 50;

// $info = sprintf("My name is %s and my age is %b", $name, $age);

// echo $info;

// Find the biggest number from a,b,c

// a>b && a>c 
// b>c && b>a
// c
// 

// $a = 100;
// $b = 50;
// $c = 55;

// if($a > $b && $a > $c){
//     echo "A is the biggest Number";
// }elseif($b > $c && $b > $a){
//     echo "B is the biggest number";
// }else{
//     echo "C is the biggest number";
// }

// if(1){
//     if(0){
//         echo "if";
//     }elseif(0){
//         echo "else if";
//     }else{
//         echo "else";
//     }
// }

// if()

// $age = 30;

// switch($age){
//     case 20:
//         echo "Grater then 20 or 20";
//         break;
//     case 30:
//         echo "Grater then 30 or 30";
//         break;
//     case 40:
//         echo "Grater then 40 or 40";
//         break;
//     default:
//         echo "This is just a age";
// }

// for loop 

// $i = 1;

// for($i; $i<=20; $i+=2){
//     $m = $i;
//     for($m; $m<=20; $m++){
//         echo $m . "\n";
//     }
//     // echo $i . "\n";
// }

// 1 1+2
// 2 2+2
// 3 3+2
// 4 4+2

// $a = 1;

// while($a <= 20){
//     $a++;
//     echo $a. "\n";
// }

$a = 15;

// echo ($a < 20) ? (($a == 15) ? "number is 15" : "not 15") : "Not 20";

// $age = $a ?? 20;

// echo $age;

$leap = 2020;

if(($leap%400==0 || $leap%100!=0 )&& $leap%4==0  ){
    echo "leap year";
}else{
    echo"not leap year";
}

// 
