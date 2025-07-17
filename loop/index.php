<?php

// loop

// for ($i = 1; $i <= 10; $i++){
//     if($i%2 != 0){
//        continue; // uses of continue and break
//     }

//     echo "$i\n";
// }


// কন্টিনিউ পরের কোডকে স্কিপ করে আর ব্রেক লুপ চলতে দেয়না

for ($i = 1; $i <= 10; $i++){
    if($i%2 == 0){
       break; // uses break
    }

    echo "$i\n";
}

// এখানে ১ প্রিন্ট হওয়ার পরে লুপ টি বন্ধ হয়ে যাবে ।

