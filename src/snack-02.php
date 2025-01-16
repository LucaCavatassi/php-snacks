<!-- 2. Fibonacci Sequence Generator

	•	Task: Write a function generateFibonacci($n) that returns the first $n numbers in the Fibonacci sequence.
	•	Example: generateFibonacci(5) should return [0, 1, 1, 2, 3]. -->

<?php
function generateFibonacci($n) {
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $a . " "; //0 1 1 2 3 5 8
        $b = $a + $b; // 1 2 3 5 8 13
        $a = $b - $a; // 1 1 2 3 5 8
    }

}

generateFibonacci(7);