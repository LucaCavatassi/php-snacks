<!-- 1. Basic Arithmetic and Conditionals

	•	Task: Write a function checkNumber($num) that takes an integer and:
	•	Returns “positive” if the number is greater than zero,
	•	Returns “negative” if the number is less than zero, and
	•	Returns “zero” if the number is exactly zero.
	•	Test Cases:
	•	checkNumber(10) should return "positive".
	•	checkNumber(-5) should return "negative".
	•	checkNumber(0) should return "zero". -->

<?php 
function checkNumber($num) {
    if ($num > 0) {
        echo "positive";
    } else if ($num < 0) {
        echo "negative";
    } else if ($num === 0) {
        echo "zero";
    }
}

checkNumber(0);