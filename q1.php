<?php

/*Problem #1
Write a function that accepts a string. This function must return the same string but without any vowels.
function removeVowels($str) {
  ...
}

$result = removeVowels("The quick brown fox");
echo $result;
---> "Th qck brwn fx"
*/

//Solution
$original_string = "The quick brown fox jumped over the lazy dog";
$remove_vowels = str_ireplace(array('a','e','i','o','u',' '), ' ', $original_string);
print $remove_vowels;
////Print result

