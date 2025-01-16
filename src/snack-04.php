<!-- 2. String Manipulation

	•	Task: Write a function reverseString($str) that takes a string and returns it reversed.
	•	Test Cases:
	•	reverseString("hello") should return "olleh".
	•	reverseString("PHP") should return "PHP".
	•	reverseString("") should return an empty string "". -->

<?php 
function reverseString($str) {
    $strRev = strrev($str);
    var_dump($strRev);
}

reverseString('');