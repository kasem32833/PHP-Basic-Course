<?php

// array 
// দুই ধরনের array আছে ইন্ডেক্স array আর associative array


$fruits = array(
    "mango", "Jackfruits", "Litchi" 
);

$testStr = "I love Bangladesh";


//var_dump($fruits);
//print_r($fruits); //Human Readable way


$number = [10, 20, 30];  // এভাবেও লেখা যায়।

//print_r($number);

$convertVar = explode(" ", $testStr);

print_r($convertVar);

$convertArr = implode($number);

print_r($convertArr);
