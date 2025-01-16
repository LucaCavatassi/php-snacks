<?php
class User {
    public $firstName;
    public $lastName;
    public $email;
    public $role;

    public static $users = [];

    public function __construct($firstName, $lastName, $email, $role){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;

        if (in_array($role, ["Admin", "Editor", "Viewer"])) {
            $this->role = $role;
        } else {
            echo "This role it's not avilable.";
            $this->role = "Viewer"; //default
        }
    }

    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }

    public function getRole() {
        return "{$this->role}";
    }
}

class Admin extends User {

    public function AddUser($firstName, $lastName, $email, $role) {
        $user = new User($firstName, $lastName, $email, $role);
        $this->users[] = $user;
    }

    public function getUsers() {
        foreach ($this->users as $user) {
            echo "First Name: {$user->firstName}, Last Name:{$user->lastName}, Email:{$user->email}, Role:{$user->role}";
        }
    }
}

class Editor extends User {
    public function editUser($user, $newFirstName = null, $newLastName = null, $newEmail = null) {
        if ($user !== null) {
            if ($newFirstName !== null) {
                $user->firstName = $newFirstName;
            }
            if ($newLastName !== null) {
                $user->lastName = $newLastName;
            }
            if ($newEmail !== null) {
                $user->email = $newEmail;
            }
        }
    }
}

class Viewer extends User {
    public function getUsers() {
        foreach ($this->users as $user) {
            echo "First Name: {$user->firstName}, Last Name:{$user->lastName}, Email:{$user->email}, Role:{$user->role}";
        }
    }
}