<?php 
$filename = "users.json";
$users = [];

// Verifica se il file esiste e carica i dati se presenti
if (file_exists($filename)) {
    $users = json_decode(file_get_contents($filename), true);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    if (isset($_POST['username']) && isset($_POST['password']) && strlen($_POST["password"]) > 5 && strlen($_POST["username"]) > 5) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Crea il nuovo utente
        $newUser = [
            "username" => $username,
            "password" => password_hash($password, PASSWORD_BCRYPT)
        ];

        // Aggiungi l'utente al file JSON
        $users[] = $newUser;

        // Salva di nuovo nel file
        file_put_contents($filename, json_encode($users));

        echo "User added successfully.";
    } else {
        echo "Please check the fields; something is missing or too short.";
    }
} else {
    echo "Invalid request method.";
}

// Mostra gli utenti in formato JSON
header('Content-Type: application/json');
echo json_encode($users); 
?>