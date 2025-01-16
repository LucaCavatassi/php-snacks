<?php 
function kebabize($string) {
    $result = []; // Initialize empty result

    foreach (str_split($string) as $char) {
        // If number skip
        if (is_numeric($char)) {
            continue;
        }

        // If the character is uppercase
        if (ctype_upper($char)) {
            // If result it's not empty so it's not the first charachter add a '-' to the array
            if (!empty($result)) {
                $result[] = '-';
            }
            // Then add lowercase version of the uppercase character
            $result[] = strtolower($char); 
        } else {
            // Else append lowercase characters as they are
            $result[] = $char;
        }
    }

    return join($result);
}