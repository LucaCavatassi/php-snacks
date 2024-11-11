<!-- Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case). The next words should be always capitalized.

Examples
"the-stealth-warrior" gets converted to "theStealthWarrior"

"The_Stealth_Warrior" gets converted to "TheStealthWarrior"

"The_Stealth-Warrior" gets converted to "TheStealthWarrior" -->

<?php 
function toCamelCase($str){
    // Split string into array
    $strArr = str_split($str);

    for ($i = 0; $i < count($strArr); $i++) {
        // If iteration is === to '-' or '_'  -> if it has another letter after capitilize it then remove the character
        if ($strArr[$i] === '-' || $strArr[$i] === '_') {
            if (isset($strArr[$i + 1])) {
                $strArr[$i + 1] = strtoupper($strArr[$i + 1]);
            }
            unset($strArr[$i]);
        }
    }
    
    // join array into string
    return join($strArr);
}

var_dump(toCamelCase('BbWZCvkDVjcwKiOFIjiwLaZpqqByNGbNIibHjJRRhgRawkVHVDkXHSHHbLpBmDgeuFMsPIftkETLhAqFiDCsOdydF_wp'));