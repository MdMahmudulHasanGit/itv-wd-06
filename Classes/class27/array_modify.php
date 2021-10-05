<?php

$students = ['jamal' , 'kalam' , 'salam' , 'rafik'];
// $students[2] = 'changed';
// $students[] = 'karim';

// array_pop()
// array_shift()
// array_push()
// array_unshift()

// $student = array_shift($students);

$student = array_unshift($students, 'tarek', 'yash');

var_dump($students);
var_dump($student);

// echo count($students);
// $count = count($students);
// for($i = 0; $i < $count; $i++){
//     echo $students[$i] . "\n";
// }