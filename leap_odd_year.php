<?php

// function isLeapYear($year) {
//     if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
//         return true;
//     }
//     return false;
// }

// function isOddYear($year) {
//     return $year % 2 != 0;
// }

// $year = 2023; 

// if (isLeapYear($year)) {
//     echo $year . " is a leap year.\n";
// } else {
//     echo $year . " is not a leap year.\n";
// }

// if (isOddYear($year)) {
//     echo $year . " is an odd year.\n";
// } else {
//     echo $year . " is not an odd year.\n";
// }


$year = 2023; 

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}

/*if ($year % 2 != 0) {
    echo "\n" . $year . " is an odd year.";
} else {
    echo "\n" . $year . " is not an odd year.";
}*/
