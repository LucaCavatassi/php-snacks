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



class Dinglemouse {
    public function __construct($firstName, $lastName) {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
    }
    
    public function getFullName() {
      return trim("{$this->firstName} {$this->lastName}");
    }
  }

  function calculate($a, $o, $b) {
    $result = 0;
   
    if ($o === "+") { 
        $result = $a + $b;
    } else if ($o === "-") {
        $result = $a - $b;
    } else if ($o === "/" && $b !== 0) {
        $result = $a / $b;
    } else if ($o === "/" && $b === 0) {
        $result = null; // or handle as you see fit
    } else if($o === "*") {
        $result = $a * $b;
    } else {
        $result = null;
    }
   
    return $result; 
  }

  function greet($name) { 
    if ($name === 'Johnny') {
        return 'Hello, my love!';
    } else {
      return "Hello, $name!";
    }
}