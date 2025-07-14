<?php


// spaceship operator

 $spacehip1 =3 <=> 5; //-1
 $spacehip2 =5 <=> 5; // 0
 $spacehip3 =6 <=> 3; // 1


 echo "$spacehip1 \n";
 echo "$spacehip2 \n";
 echo "$spacehip3 \n";

// null operator (??)

// null ?? default ; প্রথম টায় জদি কোন ভালু না থাকে তাহলে ডিফল্ট ভ্যালু আর যদি থাকে তাহলে প্রথম টা শো করবে।

$customer = null;
$customer1 = "Abdullah";



$result = $customer ?? "visitor";
$result2 = $customer1 ?? "visitor";

echo "$result2\n";

// Control flow
// if else php

// if(condition){

// } 
//যদি কন্ডিশন সত্যি হয়

$score = 40;

if($score >= 80){
    echo "Get A+";
}else{
    echo "Not A+\n";
}

// ternary operato (short form of if else) conditio ? "true" : "false"

$score2 = 28;

$result2 = $score2 >= 33 ? "Got A++" : "Fail";

echo "$result2\n";

// elese if operator


$bangla = 30;

if($bangla >= 70){
    echo "Your result is A";
}elseif($bangla >= 60){
    echo "Your result is B";
}elseif($bangla >= 40){
    echo "Your result is C";
}else{
    echo "তুমি গোল্লা পাইছ";
}

// যদি একাধিক condition চেক করার প্রয়োজন হয় তাহলে if-elseif-











