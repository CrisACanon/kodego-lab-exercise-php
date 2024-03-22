<?php

/* Problem #2
Write a function that accepts an array of integers. This function must return the same array without odd numbers.

function removeOdd($numbers) {
  ...
}

$numArr = [1,2,3,4,5,6,7,8,9,10];
$result = removeOdd($numArr);

print_r($result);
---> [2,4,6,8,10]

*/


//Solution
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);


for ($a=0; $a<=10;$a++) 
{
    if ($arr[$a]%2==0)
    {
      //Print result (Even numbers)
      print "" . $arr[$a] . ", ";
    }
}

