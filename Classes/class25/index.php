<?php

// $balance = '5euro';

// switch($balance){
//     case "8euro":
//         echo "My balance is 8euro";
//         break;
//     case 5:
//         echo "My balance is 5";
//         break;
//     case "5euro":
//         echo "My balance is 5euro";
//         break;
//     default:
//         echo "My balance is null";
// }

// $a = false || true; // (false || true)
// $b = false or true; // $b = false -- or trues

// $a = true && false;
// $b = true and false;

// var_dump($a, $b);

// $i = 1;

// for($i; $i<20; $i++){
//     if($i % 10 == 0){
//         continue;
//     }
//     echo $i . "\n";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Print even numbers from 1-20</h2>
    <?php 
    $i = 2;
    for($i; $i<=20; $i+=2){
        echo "<p>{$i}</p>";
    }

    $m= 2;
    if($m == 3):
    ?>
        <h2>This is true</h2>
    <?php
    else:
        echo "<h2>This is false</h2>";
    endif;
    ?>
</body>
</html>

