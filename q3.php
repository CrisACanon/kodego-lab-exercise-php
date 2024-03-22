<?php

/*Problem #3
Write a function that accepts a 2-dimensional array of numbers. This function must return the number of instances of the number 1.

function countOnes($arr) {
  ...
}

$numArr = [
  [1,2,1,1],
  [2,3,5,1,5,6],
  [6,20,1,5]
];

$result = countOnes($numArr);
echo $result;
---> 5
*/

//Solution
$ar1 = [
[1, 2, 1, 5, 20],
[1, 3, 1, 21, 25],
[2, 3, 1, 4, 23]
];


array_icount_values ($ar1);

function array_icount_values($arr,$lower=true) {
        //array_count_values — Counts the occurrences of each distinct value in an array

    $arr2=array();

    if(!is_array($arr['0'])){$arr=$arr2($arr);
    } //is_array — Finds whether a variable is an array

    foreach($arr as $k=> $v){

     foreach($v as $v2){

     if($lower==true) {$v2=strtolower($v2);}

     if(!isset($arr2[$v2])){ 
        //isset — Determine if a variable is declared and is different than null
         $arr2[$v2]=1;
     }else{
          $arr2[$v2]++;
          }
        }
   }

  echo (max($arr2));
  //Print result
}
