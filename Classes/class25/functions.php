<?php
// Factorial calculation function
function factorial(int $n):int{
    $r = 1;
    for($i = $n; $i > 1; $i--){
        $r *= $i;
    }
    return $r;
}

function stdInfo(string $name = "Example",int $age = 50){
    echo "My name is $name and my age is $age \n";
}

function addNums($m, $n, ...$nums):int {
    // var_dump($nums);
    $totalNum = count($nums);
    $res = $m + $n;
    for($i=0; $i<$totalNum; $i++){
        $res += $nums[$i];
    }
    return $res;
}

$name = true;

echo getType($name);

// echo isEven(20);

// echo triangleArea(5,4,2);