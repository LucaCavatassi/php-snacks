<!-- •	Task: Write a function sumArray($arr) that takes an array of numbers and returns the sum of all the elements.
	•	Test Cases:
	•	sumArray([1, 2, 3, 4]) should return 10.
	•	sumArray([]) should return 0.
	•	sumArray([-1, -2, -3]) should return -6. -->

<?php 
function sumArray($arr) {
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $result += $arr[$i];
    }
    var_dump($result);
}

sumArray([1, 1, 1, 4]);