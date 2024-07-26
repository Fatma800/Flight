<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    if ($stmt->execute(['username' => $username, 'password' => $password])) {
        // Redirect to login page after successful signup
        header("Location: login.php");
        exit();
    } else {
        echo "Error occurred during signup.";
    }
}
?>
