<?php
//write a program factorial in php

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5; 
//print($number * factorial($number - 1));
$result = factorial($number);
echo "The factorial of $number is $result";
