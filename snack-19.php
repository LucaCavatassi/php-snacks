<?php
function generaPassword($length) {
    // Define character sets as arrays
    $lowercase = str_split('abcdefghijklmnopqrstuvwxyz');
    $uppercase = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numbers = str_split('0123456789');
    $specialChars = str_split('!@#$%^&*()-_=+[]{}|;:,.<>?');
    
    // Ensure at least one character from each set
    $passwordArray = [
        $lowercase[array_rand($lowercase)],
        $uppercase[array_rand($uppercase)],
        $numbers[array_rand($numbers)],
        $specialChars[array_rand($specialChars)]
    ];
    
    // Combine all character sets
    $allChars = array_merge($lowercase, $uppercase, $numbers, $specialChars);
    
    // Fill the rest of the password length with random characters
    for ($i = 4; $i < $length; $i++) {
        $passwordArray[] = $allChars[array_rand($allChars)];
    }
    
    // Shuffle the array to randomize character positions
    shuffle($passwordArray);
    
    // Convert the array back to a string
    return implode('', $passwordArray);
}
