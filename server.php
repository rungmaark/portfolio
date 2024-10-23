<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    
    if (!empty($username)) {
        $_SESSION['username'] = $username; // Store the username in a session variable
        header("Location: index.php");
        exit();
    } else {
        echo "Username cannot be empty";
    }
}
?>