<!-- Let us begin with an example:

Take a number: 56789. Rotate left, you get 67895.

Keep the first digit in place and rotate left the other digits: 68957.

Keep the first two digits in place and rotate the other ones: 68579.

Keep the first three digits and rotate left the rest: 68597. Now it is over since keeping the first four it remains only one digit which rotated is itself.

You have the following sequence of numbers:

56789 -> 67895 -> 68957 -> 68579 -> 68597

and you must return the greatest: 68957.

Task
Write function max_rot(n) which given a positive integer n returns the maximum number you got doing rotations similar to the above example.

So max_rot (or maxRot or ... depending on the language) is such as:

max_rot(56789) should return 68957

max_rot(38458215) should return 85821534
-->

<?php 
function maxRot($n) {
    $strArr = str_split((string)$n); // Convert number to an array of characters
    $maxVal = $n; // Start with the original number as the maximum

    for ($i = 0; $i < count($strArr) - 1; $i++) {
        // Remove the element at index $i and append it to the end
        $char = array_splice($strArr, $i, 1)[0];
        $strArr[] = $char;

        // Convert the array back to a string and then to an integer
        $currentVal = (int)join($strArr);
        $maxVal = max($maxVal, $currentVal);
    }

    return $maxVal;
}