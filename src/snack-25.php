<?php 
$users = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    if (isset($_POST['username']) && isset($_POST['password']) && (strlen($_POST["password"]) > 5) && (strlen($_POST["username"]) > 5)) {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $newUser = [];

        $newUser["username"] = $username;
        $newUser["password"] = password_hash($password, PASSWORD_BCRYPT);

        $users[] = $newUser;
    } else {
        echo "Please check the fields something is missing.";
    }
} else {
    echo "Invalid request method.";
}