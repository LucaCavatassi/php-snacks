<?php
class Dinglemouse {
  public $firstName;
  public $lastName;
  
  public function __construct($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }
  
  public function getFullName() {
    return trim($this->firstName . ' ' . $this->lastName);
  }
}