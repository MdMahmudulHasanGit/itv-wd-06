<?php

// function numberN($start, $end, $stepping = 1){
//     echo $start;
//     echo PHP_EOL;
//     $start += $stepping;

//     if($start >= $end){
//         return;
//     }
//     numberN($start, $end, $stepping);
// }

// numberN(0, 50, 5);


// $number = 10; // Global scope

// function printNumber(){
//     // global $number;
//     // echo $number;
//     $n = $GLOBALS['number'];
//     echo $n;
// }

// printNumber();

function printName(){
    $name = "john Doe"; // Local scope
    echo $name;
    // $GLOBALS['name'] = $name;
}

// echo $name;
// $first = "john";
// $second = "doe";

// $students = [$first, $second, 'salim', 'rana']; // indexed array

// print_r($students);

// echo "First student name is {$students[1]}";

// $color = [
//     $students[0] => 'red',
//     $students[1] => 'orange',
//     $students[2] => 'green',
//     $students[3] => 'pink'
// ];

// $stdColor = $students['2'];

// echo "{$stdColor}'s favoutite color is {$color[$stdColor]}";
// echo $multiDimensional['second']['color'];

// $students = ['john', 'doe', 'salim', 'rana', 10, 11, 12];


$multiDimensional = [
    'first' => [
        'name' => 'john',
        'color' => 'red'
    ],
    'second' => [
        'name' => 'doe',
        'color' => 'orange'
    ],
    'third' => [
        'name' => 'salim',
        'color' => 'green'
    ],
    'fouth' => [
        'name' => 'rana',
        'color' => 'pink'
    ],
];

foreach($multiDimensional as $key=>$value){
    // echo $key . "\n";
    // print_r($value);
    // echo PHP_EOL;
    foreach($value as $value){
        echo $value . "\n";
    }
}