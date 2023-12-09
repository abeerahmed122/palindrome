<?php

function isPalindrome($str) {
    $reversedStr = strrev($str);
    return $str === $reversedStr;
}

$string = "radar";
if (isPalindrome($string)) {
    echo "{$string} is a palindrome.";
} else {
    echo "{$string} is not a palindrome.";
}


?>