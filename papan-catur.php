<?php

function papan_catur($angka) {
// tulis kode di sini
for($n = 0; $n < $angka; $n++) {
    $text .= '<tr>';
    for($m = 0; $m < angka; $m++) {
     
        if(($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)) {
            echo "*";
        }
     else{

     
       echo"#";
    }
    }
// TEST CASES
/*
echo papan_catur(4);
# # # #
 # # #
# # # #
 # # #
 */

/* 
echo papan_catur(8);
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) ;
 /*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/