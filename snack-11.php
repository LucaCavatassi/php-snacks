<!-- If　a = 1, b = 2, c = 3 ... z = 26

Then l + o + v + e = 54

and f + r + i + e + n + d + s + h + i + p = 108

So friendship is twice as strong as love :-)

Your task is to write a function which calculates the value of a word based off the sum of the alphabet positions of its characters.

The input will always be made of only lowercase letters and will never be empty. -->
<?php
    function wordsToMarks(string $str) {
        // Create an array with each alphabet letter
        $alphabet = range('a', 'z');
        // Value counter
        $value = 0;
        // Split string value as array of letters
        $stringSplitted = str_split($str);

        // Search for every letter it's index in the array alphabet and add 1 because array index starts at 0 and task says a = 1;
        for ($i = 0; $i < count($stringSplitted); $i++) {
            $letterValue = array_search($stringSplitted[$i], $alphabet) + 1;
            // Sum up value
            $value += $letterValue;
        }
        // return value
        return $value;
    }
    var_dump(wordsToMarks('ciao')); 