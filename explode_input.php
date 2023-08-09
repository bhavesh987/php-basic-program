<?php

//Explode the input string into an array of words.


$input = " phone your check ";

$words = explode(' ', trim($input));

$words = array_filter($words);

$reversedWords = array_reverse($words);

$output = implode(' ', $reversedWords);

echo $output;


// OUTPUT
// check your phone