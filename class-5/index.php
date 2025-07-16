<?php


// function 

/*

//function declaration


function add($n1, $n2){
    return $n1 + $n2;
}


// functoin calling 
echo add(10, 20);

// arguments and parameter
// function default value


function add($n1, $n2=30){
    return $n1 + $n2;
}





*/

function process($callback){
    return $callback("World");
}


$result = process(function($name){
    return "Hello, $name!";
});

echo $result; 
