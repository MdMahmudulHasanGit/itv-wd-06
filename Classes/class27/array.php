<?php

// $student = [
//     'name' => 'Rafiq',
//     'age' => 20,
//     'class' => '12',
//     'department' => 'science'
// ];

// $keys = array_values($student);

// var_dump($keys);

// $students = 'Rafiq, Karim, Jamal, Kalam, Ahmed, Salim';

// $studentRecord = explode(', ', $students);
// $studentsRecord = preg_split("/(, |,)/", $students);

// var_dump($studentRecord);

// $std = join(', ', $studentRecord);

// echo $std;

// $student = [
//     'name' => 'Rafiq',
//     'age' => 20,
//     'class' => '12',
//     'department' => 'science'
// ];

// $serialized = serialize($student);

// echo $serialized;

// $unserialized = unserialize($serialized);

// print_r($unserialized);

// json_encode();

// json_decode();


// copy by value | deep copy
// Copy by referance | shallow copy
$student = ['jamal', 'kalam', 'rahim'];

// $newStudent = &$student;
// $newStudent[] = 'rafiq';
// print_r($newStudent);
// print_r($student);

// $student = ['jamal', 'kalam', 'rahim'];

// function stdTest(&$student){
//     $student[] = "rafiq";
//     print_r($student);
// }

// stdTest($student);
// print_r($student);


$student = ['jamal', 'kalam', 'rahim', 'salim', 'rafiq'];

$std = array_splice($student, -4, -1);

print_r($std);
print_r($student);