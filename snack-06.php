<!-- 4. Associative Arrays

	•	Task: Write a function findPersonAge($people, $name) that takes an associative 
    array $people with names as keys and ages as values, and a string $name. 
    The function should return the age of the person if the name exists in the array, or “Person not found” if it doesn’t.
	•	Test Cases:
	•	findPersonAge(["Alice" => 25, "Bob" => 30], "Alice") should return 25.
	•	findPersonAge(["Alice" => 25, "Bob" => 30], "Charlie") should return "Person not found".
	•	findPersonAge([], "Alice") should return "Person not found". -->

    <?php 
// function findPersonAge($arr, $str) {

//     foreach ($arr as $key => $value) {

//         if ($key === $str) {
//             echo $value;
//             return;
//         }
//     }
//     echo "Person not found.";
// }

function findPersonAge($arr, $str) {
    if (array_key_exists($str, $arr)) {
        echo $arr[$str];
    } else {
        echo "Person not found";
    }
}


findPersonAge(["Alice" => 25, "Bob" => 30], "Charlie");