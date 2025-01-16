<!-- •	Task: Write a function isPalindrome($str) that takes a string as input and returns true if the string is a palindrome (reads the same backward and forward) and false otherwise. -->
<!-- •	Example: isPalindrome("madam") should return true, and isPalindrome("hello") should return false. -->

<?php 
function isPalindrome($str) {
    // Base result = false;
    $result = false;
    // Reverse input string
    $strRev = strrev($str);
    // If string reversed it's equal to str input it's palindrome result = true
    if ($strRev === $str) {
        $result = true;
    }

    var_dump($result);
    return $result;
}

echo isPalindrome('madam');
?>

