<?php
$db_name = 'mysql:host=localhost;dbname=shekinai_food_db'; // Database name
$user_name = 'shekinai_food_db'; // Database username
$user_password = 'shekina2024'; // Database password
try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // Set the PDO error mode to exception to catch any connection issues
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: Set default encoding to UTF-8
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage()); // Logs the error
    die(); // Stops further execution
}



